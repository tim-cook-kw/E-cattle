@extends('layout.app')
@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/blank') }}">Home</a></li>
            <li class="active">Checkout</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
         
                <div class="col-md-6">
                    <div class="payments-methods">
                        <div class="section-title">
                            <h4 class="title">Signup using Social Media</h4>
                        </div>
                        <div class="form-group row">
                            <a href="{{ url('/auth/google') }}"><i class="fa fa-google"></i> Google</a>
                            <a href="{{ url('/auth/twitter') }}"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook"></i> Facebook</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-details">
                        <div class="section-title">
                            <h3 class="title">Signup</h3>
                        </div> 
                        <form method="POST" action="{{url('register')}}" enctype="multipart/form-data">   
                        @csrf
                                             <div class="form-group">
                            <input class="input" type="text" name="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="primary-btn">Signup</button>
                        </div>
                        </form>
                        <p>You Already Register? <a href="{{ url('/login') }}">Login</a></p>
                    </div>
                </div>

           
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
