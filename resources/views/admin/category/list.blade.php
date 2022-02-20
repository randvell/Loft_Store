<?php /** @var \App\Models\Category $category */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <a href="{{route('admin.category.create')}}">добавить</a>

                    <div class="panel-heading">Категории</div>
                    <table class="table table-bordered">
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{route('admin.category.edit', $category)}}">edit</a>
                                    <a href="{{route('admin.category.delete', $category)}}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
