@extends('layouts.admin')

@section('main')
<div class="row">
  <div class="col-lg-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Kategori</h5>

        <!-- Horizontal Form -->
        <form method="POST" action="{{ route('categories.store') }}">
          @csrf
          <label for="kategori" class="col-form-label">Nama Kategori</label>
          <div class="row mb-3">
            <div>
              <input type="text" name="name" class="form-control" id="inputText">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</button>
          </div>
        </form><!-- End Horizontal Form -->

      </div>
    </div>
  </div>
  <div class="col-lg-9">
      <div class="card">
        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table table-striped mt-3">
            <thead>
              <tr>
                <th scope="col">No </th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $category->name }}</td>
                <td class="button-table">
                  <button type="button" class="btn btn-success rounded-pill">Edit</button>
                  <button type="button" class="btn btn-danger rounded-pill">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
@endsection
