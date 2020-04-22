@extends('layouts.master') 

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     <small>Iqlima Nur Fiqhia</small>
   </h1>
   <ol class="breadcrumb">
   </ol>
 </section>
<section class="content">
<div class="col-lg-12">
  <div class="box">
    <div class="box-header with-border">
     <Center>
       <h3 class="box-title">Tugas Pemrograman Web Lanjut </h3>
    </Center>   
     <div class="box-tools pull-right">
         <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                 title="Collapse">
           <i class="fa fa-minus"></i></button>
         <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
           <i class="fa fa-times"></i></button>
      </div>
    </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th></th>
                  <th>BIODATA</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <td></td>
                  <td></td>
                  <th>STUDI KASUS</th>
                </tr>
                <tr>
                  <td></td>
                  <td> NAMA   : </td>
                  <td>Iqlima Nur Fiqhia </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td> JUDUL  : </td>
                  <td>SISTEM MEDIA CETAK </td>
                </tr>
                <tr>
                  <td></td>
                  <td> NIM : </td>
                  <td>1815051020 </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td> DESCRIPTION:</td>
                  <td> Sistem media cetak ini mempermudah pelanggan untuk mencetak segala hal dengan online tanpa harus mengantre.</td>
                </tr>
                <tr>
                  <td></td>
                  <td>PRODI   : </td>
                  <td> PENDIDIKAN TEKNIK INFORMATIKA </td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </tbody></table>
            </div>
        
      <div class="col-lg-12">
      <a href="{{route('Petugas.create')}}">Tambah Data</a>
      <table class="table table-bordered">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No_tlpn</th>
        <th>Status</th>
        <th>Alamat</th>
        <th>Aksi</th></tr>
      </thead>
      <tbody>
        @foreach ($Petugas as $in=>$val)
        <tr>
          <td>{{($in+1)}}</td>
          <td>{{$val->nama_petugas}}</td>
          <td>{{$val->no_tlpn}}</td>
          <td>{{$val->status}}</td>
          <td>{{$val->alamat}}</td>
          <td>
          <a href="{{route('Petugas.edit',$val->Id_petugas)}}">update</a>
          <form action="{{route('Petugas.destroy', $val->Id_petugas)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
          </form>
          </td></tr>
        @endforeach
      </tbody>
      </table>
      {{$Petugas->links()}}
      </div>
    </div>
   </div>
 </section>
 <!-- /.content -->
@endsection