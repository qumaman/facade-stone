@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="form-group text-left"><label for="">Артикул</label>
            <input type="text" name="designs[article]" value="" class="form-control">
        </div>
        <div class="form-group text-left"><label for="">Наименование</label>
            <input type="text" name="designs[title]" value="" class="form-control">
        </div>
        <div class="form-group text-left"><label for="">Описание</label>
            <input type="text" name="designs[description]" value="" class="form-control">
        </div>
        <div class="form-group text-left"><label for="">Категория</label>
            {{ Form::select('designs[sub_category]', array(null => '')+$sub_category->toArray(),(isset($_GET['sub_category']) ? $_GET['sub_category'] : null), array('class' => 'form-control')) }}
        </div>
        <div class="form-group text-left"><label for="">Цена</label>
            <input type="text" name="designs[cost]" value="" class="form-control">
        </div>
        <div class="form-group text-left"><label for="">Количество</label>
            <input type="text" name="designs[count]" value="" class="form-control">
        </div>
        <div class="form-group text-left"><label for="">Изображение</label>
            <input type="file" name="designs[file]" value="" class="form-control">
        </div>
        <div class="form-group text-left"><label for="">Эскиз</label>
            <input type="file" name="designs[file1]" value="" class="form-control">
        </div>
    </div>
@stop