@extends('layouts.admin')
@section('main')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="search-bar m-3">
              <div class="row align-items-center">
                <div class="col-6">
                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" class="form-control" placeholder="Search" title="Enter search keyword">
                        <button type="submit" class="btn btn-outline-secondary" title="Search">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
                <div class="col-6 text-end">
                    <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                        <i class="bi bi-plus-circle"></i> Tambah Produk
                    </button>
                </div>
            </div>            
            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No </th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Gambar Produk</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>
                      @if($product->image)
                          <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" width="50">
                      @else
                          No Image
                      @endif
                    </td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>Rp.{{ $product->price }}</td>
                    <td class="button-table">
                        <button type="button" class="btn btn-success rounded-pill"><i class="bi bi-pencil-square"></i> Edit</button>
                        <button type="button" class="btn btn-danger rounded-pill"><i class="bi bi-trash"></i> Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
  </div>
</section>
  <!-- End Table with stripped rows -->
  <div class="modal fade" id="ExtralargeModal" tabindex="-1">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Tambahkan Produk !</h5>
              <button type="button" class="btn-close rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <input name="name" type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select name="category" class="form-select" aria-label="Default select example">
                        <option selected>-- Pilih Kategori --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Jumlah Stok</label>
                <div class="col-sm-10">
                  <input name="stock" type="number" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Harga </label>
                <div class="col-sm-10">
                  <input name="price" type="number" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Produk</label>
                <div class="col-sm-10">
                  <input name="image" class="form-control" type="file" id="formFile">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-10">
                  <input name="date_in" type="date" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                <div class="col-sm-10">
                  <textarea name="description" class="form-control" style="height: 100px"></textarea>
                </div>
              </div>
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Status Produk</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input name="status" class="form-check-input" type="checkbox" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Ditampilkan
                    </label>
                  </div>
                </div>
              </fieldset>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary rounded-pill">Save changes</button>
          </div>
        </form>
      </div>
  </div>
</div>
<!-- End  Modal-->
@endsection
