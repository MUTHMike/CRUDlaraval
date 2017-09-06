@extends('admin')
@section('title')
<title>Dashborad</title>
@stop

@section('style')

@stop

@section('content')
<section class="box">
    <header class="panel_header">
        
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

@stop
