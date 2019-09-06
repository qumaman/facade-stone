<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\FileStorage;
use App\Models\FileStorageType;
use App\Models\Image;
use App\Models\Stamp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class StampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['stamps'] = Stamp::all();
        $data['title'] = 'Штампы и Печати';
        return view('admin.stamp.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['title'] = 'Штампы и Печати / Добавить';
        return view('admin.stamp.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = Input::all();
        $request->validate([
            'article'=>'required',
            'title'=>'required',
            'subcategory_id'=>'required',
            'description'=> 'required',
            'cost' => 'integer',
            'count' => 'integer',
        ]);
        if(empty($request->id)){
            $stamp = new Stamp([
                'title' => $request->get('title'),
                'article' => $request->get('article'),
                'subcategory_id' => $request->get('subcategory_id'),
                'description'=> $request->get('description'),
                'cost'=> $request->get('cost'),
                'count'=> $request->get('count'),
            ]);
        } else {
            $stamp = Stamp::findOrFail($request->id);
            $stamp->title = $request->title;
            $stamp->article = $request->article;
            $stamp->subcategory_id  = $request->subcategory_id;
            $stamp->description = $request->description;
            $stamp->cost = $request->cost;
            $stamp->count = $request->count;
        }
        //$stamp = Stamp::createOrUpdate([])
        $stamp->save();

        if ($request->hasFile('image_file')){
            $image_file = Input::file('image_file');
            $check = $this->addFile($image_file, $stamp->id, 1, 'Печати и штампы');
            if(!is_numeric($check))
                return Redirect::action('StampController@index')->withInput($data)->withErrors($check);

        }



        return redirect('/admin/stamps')->with('success', 'Печать был добавлен успешно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['title'] = 'Штампы и Печати / Добавить';
        $data['id'] = $id;
        $data['stamp'] = Stamp::findOrFail($id);
        return view('admin.stamp.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    final protected function downloadFile ($file_id) {
        $file = FileStorage::findOrFail($file_id);
        $file_type = FileStorageType::findOrFail($file->file_type_id);

        $download = $file_type->path.$file->filename; //echo '<pre>'; var_dump($download); die;

        if (!file_exists($download)){
            return Redirect::back()->with('error',trans('error.file_not_found'));
        }

        if (!$this->checkAccessLevel($file_id)) {
            return Redirect::back()->with('error', trans('error.file_access_error'));
        }

        return Response::download($download);
    }

    final public static function getFileInput ($field_name, $file_id = null, $person_id = null, $validate_class='') {
        $res = '';
        $file = FileStorage::find($file_id);
        if(!empty($file->id)) {
            $res .= '<a href="'.URL::action ("StampController@downloadFile",  $file_id).'" class="file-download">'.trans('general.download').'</a>';
            $res .= ' <span class="file-download file-delete" style="cursor:pointer" data-fileId='.$file_id.' data-fileName='.$field_name.' data-personId='.$person_id.' title='.trans("general.delete").'><i class="glyphicon glyphicon-pencil" style="color: rgb(101, 116, 131);" aria-hidden="true"></i></span>';
            $res .= Form::file($field_name, array('class'=>$validate_class.' file-upload hidden'));
            $res .= '<span class="file-restore file-upload hidden" style="cursor:pointer" data-fileName="'.$field_name.'">'.trans('main.file_restore').'</span>';
        }
        else
            $res .= Form::file($field_name, array('class'=>$validate_class));

        return $res;
    }

    final public static function getFileInputView ($field_name, $file_id = null, $validate_class='') {
        $res = '';
        if($file_id != null && $file_id>0) {
            $res .= '<a href="'.URL::action ("StampController@downloadFile",  $file_id).'" class="file-download">'.trans('general.download').'</a>';
        }
        else
            $res .= Form::file($field_name, array('class'=>$validate_class));

        return $res;
    }

    protected function addFile ($file, $record_id, $file_type_id, $name) {

        $rules = '';
        $file_path = FileStorageType::findOrFail($file_type_id)->path; //путь к каталогу файла общий
        if(is_null($record_id)) {
            $file_type = FileStorageType::findOrFail($file_type_id);
            // проверка расширений
            if ($file_type->file_extension != '') {
                $rules .= 'mimes:' . $file_type->file_extension;
            } else {
                $file_type->file_extension = 'Field file_extension empty in DB!';
                $rules .= 'mimes:' . $file_type->file_extension;
            }
            // проверка макс. размера файла
            if ($file_type->file_maxsize > 0) {
                $rules .= '|max:' . $file_type->file_maxsize;
            } else {
                $rules .= '|max:Field file_extension empty in DB!';
            }
        } else {
            $file_type = FileStorageType::findOrFail($file_type_id);
            // проверка расширений
            if ($file_type->file_extension != '') {
                $rules .= 'mimes:' . $file_type->file_extension;
            } else {
                $file_type->file_extension = 'Field file_extension empty in DB!';
                $rules .= 'mimes:' . $file_type->file_extension;
            }
            // проверка макс. размера файла
            if ($file_type->file_maxsize > 0) {
                $rules .= '|max:' . $file_type->file_maxsize;
            } else {
                $rules .= '|max:Field file_extension empty in DB!';
            }
        }
        // проверка мин. размера файла
        $rules.='|min:1';
        $validation_attributes_and_custom = [];
        //$validation_attributes_and_custom = trans('validation.attributes'); // Присваиваем стандартные аттрибуты файлов перевода
        $validation_attributes_and_custom[$name] = $name; // Добавляем свои значения, так как они только на одном языке приходят
        $validator = Validator::make(array($name=>$file), array($name=>$rules), array(), $validation_attributes_and_custom); // Конструктор   public function __construct(Translator $translator, array $data, array $rules,array $messages = [], array $customAttributes = []) (http://stackoverflow.com/questions/17047116/laravel-validation-attributes-nice-names)
        if($validator->passes()){
            $file_extension = $file->getClientOriginalExtension();
            if(is_null($record_id))
                $record_id = Image::max('id') + 1;
            $file_name = $record_id.'_'.$file_type->file_type.'_'.(Image::max('id') + 1).'_'.time().'.'.$file_extension;
            $path = $file_path.'/'.$record_id.'/'; //в зависимости от типа прикреляемого файла заносим в каталог(имя каталога из file_types поле path) + каталог объекта
            $file->move($path, $file_name);
            $insert = array();
            $insert['title'] = $file_name;
            $insert['stamp_id'] = $record_id;
            $insert['url'] = $record_id.'/'.$file_name;
            $insert['file_type_id'] = $file_type_id;
            //$insert['user_id'] = User::getUserID();
            $res = Image::create($insert);
            return $res->id;
        }
        else {
            return $validator->errors()->all();
        }

    }

    protected function updateFile($file_id, $ar){
        $file = Image::find($file_id);
        if ($file)
            $file->update($ar);

        return true;
    }

    protected function deleteFile ($file_id) {
        $file = Image::find($file_id);
        $fileType = FileStorageType::find($file->file_type_id);
        $change = explode('/', $file->filename);
        $old = getcwd();
        chdir($fileType->path.$change[0]); //переключаемся в каталог где находиться файл дабы избежать permission denited
        if ($file) {
            unlink($_SERVER['DOCUMENT_ROOT'].'/'.$fileType->path.$change[0].'/'.$change[1]); //указываем полный(абсолютный) путь до файла и удаляем его
            $file->delete();
        }
        chdir($old);

        return true;
    }
}
