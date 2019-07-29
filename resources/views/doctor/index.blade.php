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
              <h3 class="box-title">Table Data Doctor</h3>
              <div class="box-tools">
                   <a href="/doctor/create">
                    <button class="btn btn-primary">Tambah Data</button>
                    </a>
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Profile</th>
                  <th >Nama Lengkap</th>
                  
                  <th >Jenis Kelamin</th>
                  <th>Email</th>
                  <th>TTL</th>
                  
                  <th style="width: 180px">Aksi</th>
                </tr>
                @php
                    $no=1; 
                    
                @endphp
                @foreach ($data as $item)
                
                <tr>
                  <td>{{$no++}}</td>
                  <td><img src="{{$item->getAvatar()}}" width="40px" height="40px" class="img-circle" alt="User Image"></td>
                  <td>{{$item->nama_depan}} {{$item->nama_belakang}}</td>
                  
                  <td>{{$item->gender}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->tempat_lahir}}/{{$item->tgl_lahir}}</td>
                  
                 
                  <td>
                    <form action="{{route('doctor.destroy',['id'=>$item->id])}}" method="post">
                        <a class="btn btn-info btn-sm" href="{{route('doctor.show',['id'=>$item->id])}}">Detail</a>
                        <a class="btn btn-warning btn-sm" href="{{route('doctor.edit',['id'=>$item->id])}}">Edit</a>
                        
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="button" onclick="if (confirm('Hapus ?')) this.form.submit();">Delete</button>
                        
                    </form>
                     
                      
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