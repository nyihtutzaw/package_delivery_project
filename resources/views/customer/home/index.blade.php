@extends('customer.layouts.master-home')

@section('title')
<title>Customer | Home</title>
@endsection

@section('css')
   

    
 
    
@endsection

@section('script')


@endsection



@section('content')
<div class="row">
    <a class="btn btn-primary ripple m-1" href="{{ route('customer.order.create') }}">Add New Order</a>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Delivery Man</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($orders as $index=>$item)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->from_township->name }}</td>
                    <td>{{ $item->to_township->name }}</td>
                    <td>{{ $item->destination }}</td>
                    <td>{{ $item->delivery_man->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('dashboard.township.edit',['id'=>$item->id]) }}" class="text-success mr-2"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                        <a href="{{ route('dashboard.township.delete',['id'=>$item->id]) }}" class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>

@endsection


