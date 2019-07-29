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
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Table Data Kategori</h3>
              <div class="box-tools">
                   <a href="/kategori/create">
                    <button class="btn btn-primary">Tambah Data</button>
                    </a>
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                <tr>
                  <th style="width: 10px">#</th>
                  <th >Nama Kategori</th>
                  
                  <th style="width: 130px">Aksi</th>
                </tr>
                @php
                    $no=1; 
                    
                @endphp
                @foreach ($data as $item)
                
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$item->nama}}</td>
                  
                 
                  <td>
                    <form action="{{route('kategori.destroy',['id'=>$item->id])}}" method="post">
                        <a class="btn btn-warning btn-sm" href="{{route('kategori.edit',['id'=>$item->id])}}"" >Edit</a>
                        |
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
        <div class="col-md-2"></div>
       
      </div>
      
    </section>
   
</section>
@endsection