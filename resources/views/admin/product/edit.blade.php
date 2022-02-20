@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit category</div>
                    <form action="{{route('admin.product.update', $product)}}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            @foreach ($product->getFillable() as $field)
                                <tr>
                                    <td>{{$field}}</td>
                                    <td>
                                        <input type="text" name="{{$field}}" value="{{$product->$field}}">
                                        @if ($errors->has($field))
                                            <div class="alert alert-danger">{{$errors->first($field)}}</div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <input type="submit" value="Обновить">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
