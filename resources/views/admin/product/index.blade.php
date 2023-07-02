@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Products</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('pro.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                {{-- <th>images</th> --}}
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($product as $pro)
              <tr>
                <td>{{ $product->firstItem() + $loop->index }}</td>
                <td>{{ $pro->name }}</td>
                <td>{{ number_format($pro->price) ." บาท"}}</td>
                <td>{{ Str::limit($pro->description,20) }}</td>
                <td><img src="{{ asset('backend/img/img_pro/'.$pro->image) }}" alt="" width="150"></td>
                <td>{{ $pro->created_at }}</td>
                <td>{{ $pro->updated_at }}</td>
                <td>
                  <a href="{{ url('admin/product/edit/'.$pro->id) }}"><i class='bx bxs-edit'></i></a>
                  <a href="{{ url('admin/product/delete/'.$pro->id) }}"><i class='bx bx-trash'></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <div class="container">
          <div class="row mt-4">
              {{ $product->links('pagination::bootstrap-5') }}
          </div>
        </div>
      </div>
    </div>
@endsection