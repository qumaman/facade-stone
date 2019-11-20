@extends('adminlte::page')

@section('title', 'Админ панель')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <p></p>
<div class="panel panel-default">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Наименование</td>
                        <td>Описание</td>
                        <td><a href="/admin/designs/create" class="btn btn-success">Добавить</a></td>
                    </tr>
                </thead>
                <tbody>
                @foreach($designs as $design)
                    <tr>
                        <td>{{ $design->id }}</td>
                        <td>{{ $design->title }}</td>
                        <td class="">{!! $design->description !!}</td>
                        <td>
                            <a href="{{ route('designs.edit',$design->id)}}" class="btn btn-primary">Редактировать</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop