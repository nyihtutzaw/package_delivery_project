@extends('dashboard.layouts.master-home')

@section('title')
<title>Dashboard | Home</title>
@endsection

@section('css')
    
    
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $("#township_id").val($("#township_id_hidden").val());
    })
</script>
@endsection



@section('content')
<div class="breadcrumb">
    <h1>Delivery Man</h1>
    <ul>
        <li><a href="">Edit</a></li>
    </ul>
 
</div>
<div class="row">
    <div class="card col-md-12 col-lg-12 mb-5">
        <form action="{{ route('dashboard.deliveryman.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row row-xs">
                <div class="col-md-4">
                    <span>Name</span>
                    <input class="form-control" type="text" placeholder="Enter name" name="name" value="{{ $deliveryMan->name }}" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>NRC</span>
                    <input class="form-control" type="text" placeholder="Enter nrc" name="nrc" value="{{ $deliveryMan->nrc }}" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Address</span>
                    <input class="form-control" type="text" placeholder="Enter address" name="address" value="{{ $deliveryMan->address }}" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Phone</span>
                    <input class="form-control" type="text" placeholder="Enter phone" name="phone" value="{{ $deliveryMan->phone }}" required />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Photo</span>
                    <input class="form-control" type="file" placeholder="Enter photo" name="photo"  />
                </div>
                <div class="col-md-4 mt-3 mb-3 mt-md-0">
                    <span>Township</span>
                    <select name="township_id" id="township_id" class="form-control">
                        @foreach ($townships as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 mt-3 mb-3 mt-md-0">
                    <input type="hidden" name="id" value="{{ $deliveryMan->id }}" >
                    <input type="hidden" id="township_id_hidden" value="{{ $deliveryMan->township_id }}" >
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection


