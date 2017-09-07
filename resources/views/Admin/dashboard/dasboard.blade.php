@extends('admin')
@section('title')
<title>Dashborad</title>
@stop

@section('style')

@stop

@section('content')
<section class="box">
    <header class="panel_header">
        <h2 class="title pull-left">Admin | Dasboard</h2>
    </header>
    <div class="content-body">
        @if(Auth::guest())
       
        @else 
        <p>Login</p>
        @endif
    </div>
</section>
<div class="container-fluid">
    <div class="row"> 
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                      <h3 class="panel-title">View User<b></b></h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                      <a href="main/create_user"><button type="button" class="btn btn-sm btn-primary btn-create">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th><em class="fa fa-cog"></em>Action</th>
                    </tr> 
                  </thead>
                  <tbody>
                        @foreach($view_user as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->use_firstname }}</td>
                            <td>{{ $value->use_lastname }}</td>
                            <td>{{ $value->use_email }}</td>
                            <td>{{ $value->use_gender }}</td>
                            <td align="center">
                                <a href="main/view_user/{{ $value->id }}"class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a href="main/del_user/{{ $value->id }}"class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            
              </div>
            </div>

</div></div></div>
@stop

@section('script')

@stop
