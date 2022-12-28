@extends('AdminLayout.Layout')
<!-- @section('title','Dashboard') -->

@section('content')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Rack Index</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
          <a href="{{route('folder.create')}}"  class="btn btn-primary mb-2" style="margin-left:640px;">Add New</a>
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                </div> -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Shelf</th>
                        <th>Rack</th>
                        <th>Status</th>                        
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($folders as $folder)                    
                    <tr>
                        <td>{{$folder->id}}</td>
                        <td>{{$folder->name}}</td>
                        <td>{{$folder->from}}</td>
                        <td>{{$folder->to}}</td>
                        <td>{{$folder->shelf_id}}</td>
                        <td>{{$folder->rack_id}}</td>                        
                        <td>
                          @if($folder->status == 'Active')                          
                            <span class="badge badge-success">{{$folder->status}}</span>                          
                          @else                          
                            <span class="badge badge-danger">{{$folder->status}}</span>                         
                          @endif
                        </td>                        
                        <td>
                        <a href="{{url('/folder/edit/'.$folder->id)}}" class="btn btn-warning btn-sm">
                          <i class="fas fa-exclamation-triangle"></i>
                        </a>                  
                        <a href="{{url('/folder/show/'.$folder->id)}}" class="btn btn-info btn-sm">
                          <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{url('/folder/destroy/'.$folder->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                          <i class="fas fa-trash"></i>
                        </a>
                        </td>
                      </tr>
                      @endforeach  
                     
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
</div>
@endsection