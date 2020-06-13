@extends('customer.layouts.master-home')

@section('title')
<title>Customer | Order Create </title>
@endsection

@section('css')
   

 
    
@endsection

@section('script')


@endsection



@section('content')
<div class="row">
    <div class="breadcrumb">
        <h1>Create Order</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card mb-5">
            <form action="{{ route('customer.order.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="d-flex flex-column">
                    <div class="form-group mb-4">
                        <span>Date (YYYY-MM-DD)</span>
                        <input class="form-control" type="text"  name="date" required/>
                    </div>
                    <div class="form-group mb-4">
                        <span>From Township</span>
                        <select class="form-control" name="to_township_id" id="" required>
                            @foreach ($townships as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <span>To Township</span>
                        <select class="form-control" name="from_township_id" id="" required>
                            @foreach ($townships as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <span>Destination (* Address and Phone of Receiver )</span>
                        <textarea class="form-control" type="text" name="destination" required></textarea>
                    </div>
                    <button class="btn btn-primary pd-x-20">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
   
</div>

@endsection


