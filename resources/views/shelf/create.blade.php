@extends('AdminLayout.Layout')
<!-- @section('title','Dashboard') -->

@section('content')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Rack</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
<div class="row">
    <div class="col-lg-6">
        <!-- Form Basic -->
        <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
        </div>
        <div class="card-body">
            <form action="{{url('/shelf/store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input required name="Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Remark</label>
                    <textarea required name="Remark" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></textarea>                      
                </div> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <select required name="status" class="form-control">
                    <option value="">--- Select Status ---</option>
                    <option value="Active">Active</option>
                    <option value="InActive">InActive</option>
                    <select>                    
                </div>                   
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>
</div>
@endsection