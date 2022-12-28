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
            <form action="{{url('/folder/update')}}" method="post">            
            @csrf               
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input value="{{ $folder->name}}" required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Remark</label>
                        <input value="{{$folder->remark}}"  name="remark" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                     
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <input value="{{$folder->from}}"  name="from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">To</label>
                        <input value="{{ $folder->to}}" name="to" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                      
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                                <label for="exampleInputEmail1">Shelf</label>
                                <select value="{{$folder->shelf_id}}" required name="shelf_id" class="form-control">                                           
                                        <option value="">--- Select Shelf ---</option>  
                                        @foreach($shelvess as $shelf)
                                            <option value="{{ $shelf->id }}" >{{$shelf->Name}}</option>
                                        @endforeach
                                </select>                          
                        </div>
                </div>         
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rack</label>
                        <select required name="rack_id" class="form-control">                                           
                            <option value="">--- Select Rack ---</option>  
                                @foreach($rackss as $rack)
                                    <option value="{{ $rack->id }}" >{{$rack->Name}}</option>
                                @endforeach
                            </select>                          
                    </div>
                </div>     
            </div>                       
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Rack 1</label>
                        <select class="form-control" data-live-search="true" name="rack_id" id="subject">
                                @foreach($rackss as $rack =>$rack_id)
                                    <option value="{{$rack->}}" {{$rack_id->rack == $rack ? 'selected' : ''}}>{{$rack_id}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                            <select name="status" class="form-control">
                                @if($folder->status == "Active")
                                {
                                    <option selected value="Active">Active</option>
                                    <option value="InActive">InActive</option>
                                }
                                @else
                                {
                                    <option value="Active">Active</option>
                                    <option selected value="InActive">InActive</option>
                                }
                                @endif
                            </select>
                    <div>
                </div>  
            </div>          
                <button type="submit" class="btn btn-primary" style="margin-left:630px;">Submit</button>
            </div>              
            
    </form>
    </div>
</div>
</div>
@endsection