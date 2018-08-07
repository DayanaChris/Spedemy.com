@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">MANAGE</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <div class="panel-body">
                      <h3>Manage Category</h3>
                      <table class="table table-striped">
                          <tr>
                              <th>PARTS</th>
                              <th></th>
                              <th></th>
                              <th></th>


                          </tr>
                              <tr>
                                  <td>MANAGE CATEGORY</td>
                                  <td><a href="/categorys/create" class= "btn btn-primary"> create</a></td>
                                  <td>  <a href="/categorys" class= "btn btn-primary"> manage</a></td>
                                  <td>  <a href="/categorys.dashboard" class= "btn btn-primary"> LIST VIEW</a></td>
                                  <td> <a href="/category_menu" class= "btn btn-primary"> Category Menu</a></td>


                              </tr>
                              <tr>
                                  <td>MANAGE LESSONS- TO FOLLOW</td>
                                  <td><a href="/categorys/create" class= "btn btn-primary"> create</a></td>
                                  <td>  <a href="/categorys" class= "btn btn-primary"> manage</a></td>
                                  <td>  <a href="/dashboard" class= "btn btn-primary"> LIST VIEW</a></td>

                              </tr>


                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



@include('inc.footer')


@endsection
