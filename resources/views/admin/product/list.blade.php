<?php /** @var \App\Models\Product $product */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <a href="{{route('admin.product.create')}}">добавить</a>

                    <div class="panel-heading">Категории</div>
                    <table class="table table-bordered">
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                    <a href="{{route('admin.product.edit', $product)}}">edit</a>
                                    <a href="{{route('admin.product.delete', $product)}}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
