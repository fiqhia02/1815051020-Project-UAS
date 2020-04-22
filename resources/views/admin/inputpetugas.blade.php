@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Data Petugas
      </h1>
      <ol class="breadcrumb">
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($Petugas)) ? route ('Petugas.update',$Petugas->Id_petugas):route('Petugas.store')}}" method="post">
    @csrf
    @if(isset($Petugas))?@method('PUT')
    
    @endif
    <div class="panel-body">
	<div class="form-group">
		<label class="control-label col-lg-2">Nama Petugas</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Petugas))?$Petugas->nama_petugas:old('nama_petugas')}}" name="nama_petugas" class="form-control">
            @error('nama')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-2">No Telpon</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Petugas))?$Petugas->no_tlpn:old('no_tlpn')}}" name="no_tlpn" class="form-control">
            @error('no_tlpn')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-2">Status</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Petugas))?$Petugas->status:old('status')}}" name="status" class="form-control">
            @error('status')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-2">Alamat</label>
		<div class="col-lg10">
			<input type="text" value="{{(isset($Petugas))?$Petugas->alamat:old('alamat')}}" name="alamat" class="form-control">
            @error('status')
                <small style="color:red">{{$message}}</small
            >@enderror
		</div>
	</div>
	<div class="form-group">
	<button type="submit">SIMPAN</button>
    </div>
    </form>
    </div>
    </div>
</div> 
@endsection