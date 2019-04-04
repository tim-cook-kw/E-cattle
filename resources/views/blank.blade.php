@extends('layout.app')
@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Error</li>
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
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-12 text-center">
                    <div class="product-body">
                        <h1 class="product-name">Something went wrong.</h1>
                        <p>Looks like this page is missing. If you still need help, visit our <a href="#">help pages.</a>
                        </p>
                        <button onclick="window.history.back();" class="primary-btn">Go to homepage</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product Details -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /section -->
@endsection
