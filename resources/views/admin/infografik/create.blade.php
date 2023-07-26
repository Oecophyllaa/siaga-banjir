@extends('layouts.admin')

@section('content')
  <!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-4">
          <div class="page-header float-left">
            <div class="page-title">
              <h1>Infografik</h1>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="page-header float-right">
            <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="#">Media</a></li>
                <li class="active">Infografik</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">Tambahkan Informasi Infografik</div>
            <div class="card-body card-block">
              <!-- error-alert-exceptions -->
              @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">Ada Kesalahan!</h4>
                  <hr>
                  @foreach ($errors->all() as $error)
                    <p>&bull; {{ $error }}</p>
                  @endforeach
                </div>
              @endif

              <!-- form -->
              <form action="{{ route('admin.infografik.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="nf-title" class="form-control-label">Judul</label>
                  <input type="text" id="nf-title" name="title" placeholder="Judul Infografik . . ." class="form-control">
                  <span class="help-block">Berikan judul infografik yang menarik</span>
                </div>
                <div class="form-group">
                  <label for="file-input" class="form-control-label">Gambar</label>
                  <input type="file" id="file-input" name="image" class="form-control-file">
                  <span class="help-block">Max 2MB</span>
                </div>
                <div class="form-actions form-group">
                  <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
