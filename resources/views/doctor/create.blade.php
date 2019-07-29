@extends('layouts.master')
@section('content')
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-1">
       
        
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-10">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Input Data Doctor</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="{{route("doctor.store")}}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama depan</label>

                <div class="col-sm-10">
                  <input type="text" name="nama_depan" class="form-control" id="inputEmail3" placeholder="Nama depan">
                </div>
              </div>
              <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Belakang</label>
    
                    <div class="col-sm-10">
                      <input type="text" name="nama_belakang" class="form-control" id="inputEmail3" placeholder="Nama belakang">
                    </div>
             </div>
             <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="email">
                    </div>
            </div>             
             <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis kelamin</label>
                  
                    <div class="col-sm-10">
                        <select class="form-control select2 select2-hidden-accessible" name="gender" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                            
                       </select>
                    </div>
                    
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir </label>
                    <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                            <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                    </div>
            </div>
            
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-10">
                  <textarea name="alamat" class="form-control" id="" cols="10px" rows="5px"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Upload Profile</label>

                <div class="col-sm-10">
                    <input type="file" name="profile" class="form-control" id="exampleInputFile">
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
        <div class="col-md-1">
       
        
        </div>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
@endsection