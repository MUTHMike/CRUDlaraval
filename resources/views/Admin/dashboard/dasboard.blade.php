@extends('admin')
@section('title')
<title>Dashborad</title>
@stop

@section('style')
<link rel="stylesheet" href="" />
@stop

@section('content')
<section class="box">
    <header class="panel_header">
        <h2 class="title pull-right">Admin | Dasboard</h2>
    </header>
    <div class="content-body">
        @if(Auth::guest())
        <p>Guest</p>
        @else 
        <p>Login</p>
        @endif
    </div>
</section>
@stop

@section('script')
<script src=""></script>
@stop