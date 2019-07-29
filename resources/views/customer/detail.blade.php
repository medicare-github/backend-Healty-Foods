@extends('layouts.master')
@section('content')
<section class="content">
        <section class="content">

                <div class="row">
                  <div class="col-md-3">
          
                    <!-- Profile Image -->
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{$customer->getPhoto()}}" alt="User profile picture">
          
                        <h3 class="profile-username text-center">{{$customer->nama}}</h3>
          
          
                        <a href="#" class="btn btn-primary btn-block"><b>Detail Penjualan</b></a>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
          
                    <!-- About Me Box -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Profile</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <strong><i class="fa fa-user margin-r-5"></i> Nama Lengkap</strong>
          
                        <p class="text-muted">
                          {{$customer->nama}}
                        </p>
          
                        <hr>
                        <strong><i class="fa fa-genderless margin-r-5"></i> Gender</strong>
          
                        <p class="text-muted">{{$customer->gender}}</p>
          
                        <hr>
          
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
          
                        <p class="text-muted">{{$customer->alamat}}</p>
          
                        <hr>
                       
          
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Email</strong>
          
                        <p>{{$customer->email}}</p>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-9">
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Detail Pembelian</a></li>
                        
                      </ul>
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                                <table class="table table-bordered">
                                        <tbody><tr>
                                          <th style="width: 10px">#</th>
                                          <th>Nama Barang</th>
                                          <th style="width: 80px">Jumlah</th>
                                          <th style="width: 200px">Waktu</th>
                                        </tr>
                                        @php
                                            $no=1; 
                                        @endphp
                                        @foreach ($customer->produk as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->pivot->jumlah}}</td>
                                            <td>{{$item->pivot->created_at}}</td>
                                          
                                        </tr>
                                        @endforeach
                                        
                                      </tbody>
                                    </table>
                        </div>
                         
                        </div>
                        
                    </div>
                    <!-- /.nav-tabs-custom -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
          
              </section> 
</section>
@endsection