@extends('layouts.master_frontend')
@section('content')

<div class="container-fluid">
    <div class="row mt-4 text-center">
        <h3> <strong>Product</strong> </h3>
    </div>
    <!-- ==========แถวที่ 1=========== -->
    <div class="row mt-4">
        @foreach ($product as $pro)
        <div class="col-xl-4 mt-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('backend/img/img_pro/'.$pro->image) }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $pro->name }}</h5>
                    <a href="#" class="btn btn-primary">{{ number_format($pro->price). "บาท" }}</a>
                </div>
            </div>
        </div>  
        @endforeach
    </div>
<div class="row mt-3">

</div>
@endsection