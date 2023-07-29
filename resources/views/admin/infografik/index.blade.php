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

  <!-- main-content -->
  <div class="content">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <strong class="card-title">Datatabel Infografik</strong>
            </div>
            <div class="card-body">
              <a href="{{ route('admin.infografik.create') }}" class="btn btn-primary btn-sm mb-3">
                <i class="fa fa-plus"></i>&nbsp; Tambah Infografik
              </a>
              <div class="table-stats order-table ov-h">
                <table class="table ">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Judul</th>
                      <th>Thumbnail</th>
                      <th>Tanggal Publish</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($infographics as $infographic)
                      <tr>
                        <td>{{ $infographic->id }}</td>
                        <td>{{ $infographic->title }}</td>
                        <td>
                          <img src="{{ $infographic->thumbnail }}" alt="foto" />
                        </td>
                        <td>{{ $infographic->created_at->format('d-m-Y') }}</td>
                        <td>
                          <a href="{{ route('admin.infografik.edit', $infographic->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <form action="{{ route('admin.infografik.destroy', $infographic->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah anda yakin?');">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="6" class="p-5 text-center">
                          Data tidak tersedia
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
@endsection
