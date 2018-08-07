@extends('layouts.app')

@section('content')
    <h1>Edit CATEGORY</h1>
    {!! Form::open(['action' => ['CategorysController@update', $category->category_id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class= "form=group">
            {{Form::label('category_name', 'Category Name')}}
            {{Form::text('category_name', $category->category_name,['class' =>'form-control', 'placeholder'=>'Category Name'])}}
        </div>


        <div class = "form-group">
                {{Form::file('category_image')}}
        </div>


        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
