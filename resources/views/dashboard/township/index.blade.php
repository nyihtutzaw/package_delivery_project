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
 
</div>
<div class="row">
    <div class="card col-md-12 col-lg-6 mb-5">
        <form action="{{ route('dashboard.township.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="row row-xs">
                <div class="col-md-5">
                    <input class="form-control" type="text" placeholder="Enter township name" name="name" required />
                </div>
                <div class="col-md-5 mt-3 mt-md-0">
                    <input class="form-control" type="number" placeholder="Enter township price" name="price" required />
                </div>
                <div class="col-md-2 mt-3 mt-md-0">
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($townships as $index=>$item)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }} MMK</td>
                    <td>
                        <a href="{{ route('dashboard.township.edit',['id'=>$item->id]) }}" class="text-success mr-2"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                        <a href="{{ route('dashboard.township.delete',['id'=>$item->id]) }}" class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection


