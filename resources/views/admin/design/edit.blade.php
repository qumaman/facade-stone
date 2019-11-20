@extends('adminlte::page')

@section('title', 'Админ панель')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <p></p>
    <div class="">
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['url' => url('admin/designs/store'),'method' => 'post','role' => 'form','files' => 'true','enctype'=>'multipart/form-data']) }}
                <input type="hidden" name="id" value="{{ (!empty($id)?$id:'') }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            @csrf
                            <label for="title">Наименование</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ (!empty($design['title'])?$design['title']:'') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea type="text" class="form-control ckeditor" id="description" name="description"> {{ (!empty($design['description'])?$design['description']:'') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_file">Изображение</label>
                            {{  Form::file('image_file', null) }}
                        </div>
                        <div class="form-group">
                            <label for="image_file1">Эскиз</label>
                            {{  Form::file('image_file1', null) }}
                        </div>
                        {!! Form::submit('Отправить', ['class' => 'btn btn-info']) !!}
                    </div>
                </div>
            {{Form::close() }}
        </div>
    </div>
    </div>
@stop