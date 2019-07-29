@extends('layouts.master')
@section('content')
<section class="content">
    <!-- Info boxes -->
    <div class="row">
    @if(session('sukses'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            
            {{session('sukses')}}
        </div>
        <div class="alert alert-success" role="alert">
        
        </div>
     @endif
     <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-bars"></i></span>

          <div class="info-box-content">
            <a href="/kategori/create"> 
              <span class="info-box-text">kategori</span>
              <button type="button" class=" info-box-text btn btn-info">Tambah Kategori</button>
            </a>
            
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
     <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content"> 
            <a href="">
                <span class="info-box-text">Produk</span>        
                <button type="button" class="info-box-text btn btn-success">Tambah Produk</button>
            </a>
            
            
            
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
     
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
  
            <div class="info-box-content">
              <a href="/doctor/create">
                <span class="info-box-text">Doctor</span>
                <button type="button" class=" info-box-text btn btn-warning">Tambah Doctor</button>
              </a>
              
              
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

     
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
  </section>
   
@endsection