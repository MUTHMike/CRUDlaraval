@extends('admin')
@section('title')
<title>Dashborad</title>
@stop

@section('style')

@stop

@section('content')
<section class="box">
    <header class="panel_header">
        <h2 class="title pull-left">Admin | Create User</h2>
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
            <form class="form-horizontal">
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">First Name</label>  
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Lastname</label>  
                        <div class="col-md-4">
                            <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Email</label>
                        <div class="col-md-4">
                            <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contact">Gender</label>  
                        <div class="col-md-4">
                            <input id="contact" name="contact" type="text" placeholder="Enter your contact no." class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
              

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="street" name="password">Password</label>  
                        <div class="col-md-4">
                            <input id="street" name="street" type="text" placeholder="Enter your street" class="form-control input-md" required="">

                        </div>
                    </div> <div class="form-group">
                        <label class="col-md-4 control-label" for="street" name="password">Confirm-Password</label>  
                        <div class="col-md-4">
                            <input id="street" name="street" type="text" placeholder="Enter your street" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="signup"></label>
                        <div class="col-md-4">
                            <a href="main/create_user/'"><button id="signup" name="signup" class="btn btn-success">Sign Up</button></a>
                        </div>
                    </div>

                </fieldset>
            </form>


        </div>
    </div>
</div>
@stop

@section('script')

@stop
