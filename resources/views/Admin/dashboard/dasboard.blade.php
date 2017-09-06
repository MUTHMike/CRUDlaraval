@extends('admin');
@section('title');
<title>Dashborad</title>
@stop;

@section('style');
<link rel="stylesheet" href="" />
@stop;

@section('content');
<section class="box">
    <header class="panel_header">
        <h2 class="title pull-right">Admin | Dasboard</h2>
    </header>
    <div class="content-body">
        @if(Auth:gest)
        <p>Gest</p>
        @else 
        <p>Login</p>
        @else if
    </div>
</section>
@stop;

@section('script');
<script src=""></script>
@stop;
