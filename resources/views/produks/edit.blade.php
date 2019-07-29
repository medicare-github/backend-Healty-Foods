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
            <h3 class="box-title">Form Input Data Produk</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="{{route('produk.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3"  class="col-sm-2 control-label">Nama Produk</label>

                <div class="col-sm-10">
                  <input type="text" name="nama" value="{{$data->nama}}" class="form-control" required id="inputEmail3" >
                </div>
              </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                
                    <div class="col-sm-10">
                        <select class="form-control select2 select2-hidden-accessible" required name="kategori_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach ($data_kategori as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            
                    </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
    
                    <div class="col-sm-10">
                    <input type="number" name="harga" value="{{$data->harga}}" class="form-control" required id="inputEmail3" >
                    </div>
             </div>           

            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Toko </label>
                    <div class="col-sm-10">
                            <input type="text" name="nama_toko" value="{{$data->nama_toko}}"" class="form-control" required id="inputEmail3" >
                    </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Alamat Toko </label>
                <div class="col-sm-10">
                    <textarea name="alamat_toko" class="form-control" required id="" cols="10" rows="2">{{$data->alamat_toko}}</textarea> 
                </div>
           </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-sm-10">
                           <textarea name="deskripsi" class="form-control"  required id="" cols="30" rows="4">{{$data->deskripsi}}</textarea>
                    </div>
            </div>
          
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Upload Profile</label>

              <div class="col-sm-10">
                  <input type="file" name="photo" class="form-control" id="exampleInputFile">
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