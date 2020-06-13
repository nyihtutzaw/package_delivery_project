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
    <h1>Delivery Man</h1>
 
</div>
<div class="row">
    <div class="card col-md-12 col-lg-12 mb-5">
        <form action="{{ route('dashboard.deliveryman.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row row-xs">
                <div class="col-md-4">
                    <span>Name</span>
                    <input class="form-control" type="text" placeholder="Enter name" name="name" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>NRC</span>
                    <input class="form-control" type="text" placeholder="Enter nrc" name="nrc" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Address</span>
                    <input class="form-control" type="text" placeholder="Enter address" name="address" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Phone</span>
                    <input class="form-control" type="text" placeholder="Enter phone" name="phone" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Photo</span>
                    <input class="form-control" type="file" placeholder="Enter photo" name="photo" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Township</span>
                    <select name="township_id" class="form-control">
                        @foreach ($townships as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 mt-3 mb-3 mt-md-0">
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
<div class="row">
    @foreach ($deliveryMens as $item)
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="user-profile mb-4">
                    <div class="ul-widget-card__user-info">
                        <img class="profile-picture avatar-lg mb-2" src="{{ $item->photo }}" alt="" />
                        <p class="m-0 text-24">{{ $item->name }}</p>
                        <p class="text-muted m-0">{{ $item->township->name }}</p>
                    </div>
                </div>
                <div class="ul-widget-card--line mt-2 text-center">
                    <a href="{{ route('dashboard.deliveryman.edit',['id'=>$item->id]) }}" class="btn btn-primary ul-btn-raised--v2 m-1" type="button">Edit</a>
                    <a href="{{ route('dashboard.deliveryman.delete',['id'=>$item->id]) }}" class="btn btn-danger ul-btn-raised--v2 m-1" >Delete</a>
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection


