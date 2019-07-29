@extends('layouts.master')
@section('content')
<section class="content">

        <div class="row">
          <div class="col-md-4">
  
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="img-responsive"src="{{$data->getProfile()}}" height="300" width="325" alt="User profile picture">
                
                <h3 class="profile-username text-center">{{$data->nama}}</h3>
                <p class="text-center"><strong>{{$data->kategori->nama}}</strong></p>
                <a href="{{route('produk.edit',['id'=>$data->id])}}" class="btn btn-primary btn-block"><b>Edit Produk</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
            <!-- About Me Box -->
            
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Detail</a></li>
              </ul>
                <div class="tab-content">
                        <div class="box box-primary">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Data Produk</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                  <strong><i class="fa fa-user"></i> Nama Produk</strong>
                    
                                  <p class="text-muted">
                                    <strong> {{$data->nama}}  </strong>
                                  </p>
                    
                                  <hr>
                    
                                  <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat Toko</strong>
                    
                                  <p class="text-muted">{{$data->alamat_toko}}</p>
                    
                                  <hr>
                    
                                  <strong><i class="fa fa-envelope"></i>Deskripsi</strong>
                    
                                  <p class="text-muted">
                                        <strong>{{$data->email}}</strong>
                                      </p>
                    
                                  <hr>
                    
                                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Deskripsi</strong>
                    
                                  <p>{{$data->deskripsi}}</p>
                                </div>
                                <!-- /.box-body -->
                              </div>
                
                 
                </div>
                <!-- /.tab-pane -->
  
                
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
      </section>
@endsection