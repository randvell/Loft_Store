@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add category</div>
                    <form action="{{route('admin.category.create')}}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            @foreach ($fields as $field)
                                <tr>
                                    <td>{{$field}}</td>
                                    <td>
                                        <input type="text" name="{{$field}}">
                                        @if ($errors->has($field))
                                            <div class="alert alert-danger">{{$errors->first($field)}}</div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <input type="submit" value="Создать">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
