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
          <a href="{{route('rack.create')}}"  class="btn btn-primary mb-2" style="margin-left:640px;">Add New</a>
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
                        <th>Remark</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($racks as $rack)                    
                    <tr>
                        <td>{{$rack->id}}</td>
                        <td>{{$rack->Name}}</td>
                        <td>{{$rack->Remark}}</td>
                        <td>
                          @if($rack->status == 'Active')                          
                            <span class="badge badge-success">{{$rack->status}}</span>                          
                          @else                          
                            <span class="badge badge-danger">{{$rack->status}}</span>                         
                          @endif
                        </td>
                        
                        <td>
                        <a href="{{url('/rack/edit/'.$rack->id)}}" class="btn btn-warning btn-sm">
                          <i class="fas fa-exclamation-triangle"></i>
                        </a>                  
                        <a href="{{url('/rack/show/'.$rack->id)}}" class="btn btn-info btn-sm">
                          <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{url('/rack/destroy/'.$rack->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
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