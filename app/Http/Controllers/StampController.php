<?php

namespace App\Http\Controllers;

use App\Models\FileStorageType;
use App\Models\Image;
use App\Models\Stamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
        $stamp = Stamp::createOrUpdate([])
        $stamp->save();

        if ($request->hasFile('image_file')){
            $file = $request->file('image_file');

            $data['filename_ru'] = $this->addFile($file, null, 1, $request->title);
            if(!is_numeric($data['filename_ru'])) //если не номер (id файла) то (array) выкидываем ошибку
                return Redirect::back()->withErrors($data['filename_ru']);
        } else {
        }
        //return redirect('/admin/stamps')->with('success', 'Печать был добавлен успешно!');
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

    protected function addFile ($file, $record_id, $file_type_id, $name) {

        $rules = '';
        $file_path = FileStorageType::findOrFail($file_type_id)->path; //путь к каталогу файла общий
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
        // проверка мин. размера файла
        $rules.='|min:1';

        $validation_attributes_and_custom = trans('validation.attributes'); // Присваиваем стандартные аттрибуты файлов перевода
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
            $insert['url'] = $record_id.'/'.$file_name;
            $insert['stamp_id'] = $record_id;
            $insert['file_type_id'] = $file_type_id;
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
