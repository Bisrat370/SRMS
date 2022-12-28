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
    <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
        </div>
        <div class="card-body">                      
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input readonly value="{{ $folder->name}}" required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Remark</label>
                        <input readonly value="{{$folder->remark}}"  name="remark" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                     
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <input readonly value="{{$folder->from}}"  name="from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">To</label>
                        <input readonly value="{{ $folder->to}}" name="to" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                      
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Shelf</label>
                            <input readonly value="{{$folder->shelf_id}}" class="form-control" />                     
                        </div>
                </div>         
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rack</label>
                        <input readonly value="{{$folder->rack_id}}" class="form-control" />                    
                    </div>
                </div>     
            </div> 
             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input readonly value="{{$folder->status}}" class="form-control" />
                    <div>
                </div>  
            </div>          
                <button type="submit" class="btn btn-primary" style="margin-left:630px;">Submit</button>
            </div>
    </div>
</div>
</div>
@endsection