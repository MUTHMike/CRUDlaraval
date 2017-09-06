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
@stop

@section('script')

@stop
