@extends('layouts.master')
@section('content')
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-2">
       
        
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-8">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Input Data Kategori</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="{{route("kategori.store")}}">
                {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>

                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Kategori">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>

                <div class="col-sm-10">
                  <textarea name="deskripsi" class="form-control" id="" cols="80" rows="10"></textarea>
                </div>
              </div>
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="reset" class="btn btn-default">Batal</button>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
        <!-- /.box -->
        <div class="col-md-2">
       
        
        </div>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
@endsection