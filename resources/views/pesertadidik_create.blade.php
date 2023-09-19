@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Peserta Didik page</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Peserta Didik</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
  
    <!-- Default box -->
    <div class="card elevation-2">
        <div class="card-header">
        <h3 class="card-title">Tambah Data Peserta Didik</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('pesertadidik.index') }}" class="btn btn-default shadow">Kembali</a>
            <br><br>

            <form action="{{ route('pesertadidik.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>NIS</label>
                <input name="nis" type="number" class="form-control" placeholder="Ex. 11223344">
                @error('nis')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input name="namalengkap" type="text" class="form-control" placeholder="Ex. Eben">
                @error('namalengkap')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option>Pilih Jenis Kelamin</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jk')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Nilai</label>
                <input name="nilai" type="number" class="form-control" placeholder="Ex. 90">
                @error('nilai')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" name="submit" class="btn btn-success shadow" value="Tambah">
            </form>

        </div>
    </div>
    <!-- /.card -->
  
</section>
<!-- /.content -->
@endsection