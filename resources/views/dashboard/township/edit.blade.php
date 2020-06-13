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
<div class="breadcrumb">
    <h1>Townships</h1>
    <ul>
        <li><a href="">Edit</a></li>
    </ul>
 
</div>
<div class="row">
    <div class="card col-md-12 col-lg-6 mb-5">
        <form action="{{ route('dashboard.township.update') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="row row-xs">
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Enter township name" name="name" 
                    value="{{ $township->name }}"
                    required />
                </div>
                <div class="col-md-5 mt-3 mt-md-0">
                    <input class="form-control" type="number" placeholder="Enter township price" name="price" 
                    value="{{ $township->price }}" required />
                </div>
                <div class="col-md-2 mt-3 mt-md-0">
                    <input type="hidden" name="id" value="{{ $township->id }}">
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>


@endsection


