<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;

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
        $stamp->save();
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
}
