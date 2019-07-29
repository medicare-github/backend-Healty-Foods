@extends('layouts.master')
@section('content')
<section class="content">
    <section class="content">
      <div class="row">
        @if(session('sukses'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                
                {{session('sukses')}}
            </div>
           
        @endif
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Table Data Customer</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Photo</th>
                  <th >Nama Lengkap</th>
                  
                  <th >Gender</th>
                  <th >Alamat</th>
                  <th>Email</th>
                  <th style="width: 180px">Aksi</th>
                </tr>
                @php
                    $no=1; 
                    
                @endphp
                @foreach ($data as $item)
                
                <tr>
                  <td>{{$no++}}</td>
                  <td><img src="{{$item->getPhoto()}}" width="40px" height="40px" class="img-circle" alt="User Image"></td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->gender}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->alamat}}</td>
                  
                  
                 
                  <td>
                    <a class="btn btn-info btn-sm" href="{{route('customer.show',['id'=>$item->id])}}">Detail Pembelian</a>
                  </td>
                </tr>
                @endforeach

                
                </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <div class="col-md-1"></div>
       
      </div>
      
    </section>
   
</section>
@endsection