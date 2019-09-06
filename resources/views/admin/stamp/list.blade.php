@extends('adminlte::page')

@section('title', 'Админ панель')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <p></p>
<div class="panel panel-default">
    <div class="col-md-12">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Наименование</td>
                    <td>Артикул</td>
                    <td>Категория</td>
                    <td>Описание</td>
                    <td><a href="/admin/stamps/create" class="btn btn-success">Добавить</a></td>
                </tr>
            </thead>
            <tbody>
            @foreach($stamps as $stamp)
                <tr>
                    <td>{{ $stamp->id }}</td>
                    <td>{{ $stamp->title }}</td>
                    <td>{{ $stamp->article }}</td>
                    <td>{{ $stamp->subcategory_id }}</td>
                    <td>{{ $stamp->description }}</td>
                    <td>
                        <a href="{{ route('stamps.edit',$stamp->id)}}" class="btn btn-primary">Редактировать</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop