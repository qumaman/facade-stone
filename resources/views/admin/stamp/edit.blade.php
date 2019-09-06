@extends('adminlte::page')

@section('title', 'Админ панель')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <p></p>
    <div class="panel">
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['url' => url('admin/stamps/store'),'method' => 'post','role' => 'form','files' => 'true','enctype'=>'multipart/form-data']) }}
                <input type="hidden" name="id" value="{{ (!empty($id)?$id:'') }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            @csrf
                            <label for="title">Наименование</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ (!empty($stamp['title'])?$stamp['title']:'') }}">
                        </div>
                        <div class="form-group">
                            <label for="article">Артикул</label>
                            <input type="text" class="form-control" id="article" name="article" value="{{ (!empty($stamp['article'])?$stamp['article']:'') }}">
                        </div>
                        <div class="form-group">
                            <label for="subcategory_id">Артикул</label>
                            <select class="form-control" id="subcategory_id" name="subcategory_id">
                                <option value="1" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 1)?'selected':'' }}>Печати ИП, ТОО, АО</option>
                                <option value="2" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 2)?'selected':'' }}>Врачебные печати</option>
                                <option value="3" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 3)?'selected':'' }}>Гербовые печати</option>
                                <option value="4" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 4)?'selected':'' }}>Печати нотариуса</option>
                                <option value="5" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 5)?'selected':'' }}>Штампы</option>
                                <option value="6" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 6)?'selected':'' }}>Датеры</option>
                                <option value="7" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 7)?'selected':'' }}>Нумераторы</option>
                                <option value="8" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 8)?'selected':'' }}>Факсимиле</option>
                                <option value="9" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 9)?'selected':'' }}>Экслибрис (личная печать)</option>
                                <option value="10" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 10)?'selected':'' }}>Печати по оттиску и эскизу</option>
                                <option value="11" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 11)?'selected':'' }}>Клише для печатей и штампов</option>
                                <option value="12" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 12)?'selected':'' }}>Ликвидация печати</option>
                                <option value="13" {{ (!empty($stamp['subcategory_id']) && $stamp['subcategory_id'] == 13)?'selected':'' }}>Аксессуары</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea type="text" class="form-control" id="description" name="description"> {{ (!empty($stamp['description'])?$stamp['description']:'') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cost">Цена</label>
                            <input type="number" min="0" step="1" class="form-control" id="cost" name="cost" value="{{ (!empty($stamp['cost'])?$stamp['cost']:0) }}">
                        </div>
                        <div class="form-group">
                            <label for="count">Количество</label>
                            <input type="number" min="0" step="1" class="form-control" id="count" name="count" value="{{ (!empty($stamp['count'])?$stamp['count']:0) }}">
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