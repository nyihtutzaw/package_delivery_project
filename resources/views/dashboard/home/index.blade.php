@extends('dashboard.layouts.master-home')

@section('title')
<title>Dashboard | Home</title>
@endsection

@section('css')
   

    <!-- Custom styles for this template -->
 
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">
 
    
@endsection

@section('script')
<script href="{{ URL::asset('js/home.js') }}" ></script>

@endsection



@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card card-icon mb-4">
            <div class="card-body text-center"><i class="i-Data"></i>
                <p class="text-muted mt-2 mb-2">Customers</p>
                <p class="lead text-22 m-0">22</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-icon mb-4">
            <div class="card-body text-center"><i class="i-Newspaper"></i>
                <p class="text-muted mt-2 mb-2">Pending Order</p>
                <p class="lead text-22 m-0">25</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-icon mb-4">
            <div class="card-body text-center"><i class="i-Data-Upload"></i>
                <p class="text-muted mt-2 mb-2">Total Order</p>
                <p class="lead text-22 m-0">22</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-icon mb-4">
            <div class="card-body text-center"><i class="i-Face-Style-3"></i>
                <p class="text-muted mt-2 mb-2">Delivery Men</p>
                <p class="lead text-22 m-0">24</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-icon mb-4">
            <div class="card-body text-center"><i class="i-University1"></i>
                <p class="text-muted mt-2 mb-2">Township</p>
                <p class="lead text-22 m-0">25</p>
            </div>
        </div>
    </div>
</div>

@endsection


