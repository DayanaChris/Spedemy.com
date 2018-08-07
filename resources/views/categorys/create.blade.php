@extends('layouts.app')

@section('content')
    <h1>CREATE CATEGORY</h1>
    <div class="container">
      {!! Form::open(['action' => 'CategorysController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
          <div class= "form=group">
              {{Form::label('category_name', 'Category Name')}}
              {{Form::text('category_name', '',['class' =>'form-control', 'placeholder'=>'category name'])}}
          </div>
          <br>

          <div class = "form-group">
              {{Form::file('category_image')}}
          </div>

          {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
      {!! Form::close() !!}

    </div>


@endsection
