@extends('layouts.master')
@section('content')
<section class="content">

        <div class="row">
          <div class="col-md-3">
  
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle"src="{{$data->getAvatar()}}" alt="User profile picture">
  
                <h3 class="profile-username text-center">{{$data->nama_depan}}</h3>
  
                <p class="text-muted text-center">Doctor Gizi</p>
                    <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                            <b>Born</b> <a class="pull-right">{{$data->tempat_lahir}} {{$data->tgl_lahir}} </a>
                            </li>
                    </ul>
  
               
  
                <a href="{{route('doctor.edit',['id'=>$data->id])}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
            <!-- About Me Box -->
            
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
              </ul>
                <div class="tab-content">
                        <div class="box box-primary">
                                <div class="box-header with-border">
                                  <h3 class="box-title">About Me</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                  <strong><i class="fa fa-user"></i> Nama Lengkap</strong>
                    
                                  <p class="text-muted">
                                    <strong> Nama depan : </strong>{{$data->nama_depan}} <br><strong> Nama belakang : </strong>{{$data->nama_belakang}} 
                                  </p>
                    
                                  <hr>
                    
                                  <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                    
                                  <p class="text-muted">{{$data->alamat}}</p>
                    
                                  <hr>
                    
                                  <strong><i class="fa fa-envelope"></i> email</strong>
                    
                                  <p class="text-muted">
                                        <strong>{{$data->email}}</strong>
                                      </p>
                    
                                  <hr>
                    
                                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Motto</strong>
                    
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
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