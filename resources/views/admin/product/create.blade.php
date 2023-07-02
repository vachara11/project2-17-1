@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-9">
            <h5 class="card-header">Product</h5>
            <div class="card-body">
              <div>
                <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label for="defaultFormControlInput" class="form-label">Name</label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกชื่อสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />

                
                <label for="defaultFormControlInput" class="form-label">Price</label>
                <input
                  type="text"
                  name="price"
                  class="form-control"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกราคาสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label">Description</label>
                <input
                  type="text"
                  name="description"
                  class="form-control"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกรายละเอียดสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label">Images</label>
                  <div class="input-group">
                    <input type="file" name="image" class="form-control" id="image" />
                    <label class="input-group-text" for="image">Upload</label>
                  </div>
                  
                <input type="submit" class="btn btn-primary mt-3" value="บันทึก">
                <a href="{{ route('pro.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection