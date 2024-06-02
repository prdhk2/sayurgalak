@extends('layouts.admin')
@section('main')

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
              </div>  
            <!-- Table with stripped rows -->
            <table class="table table-striped mt-3">
              <thead>
                <tr>
                  <th scope="col">No </th>
                  <th scope="col">Nama Pembeli</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Total Bayar</th>
                  <th scope="col">Pengiriman</th>
                  <th scope="col">Pembayaran</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Joko</td>
                  <td>Kangkung</td>
                  <td>Sayur Hijau</td>
                  <td>Rp. 21.000</td>
                  <td>Ambil Sendiri</td>
                  <td>Bank Transfer</td>
                  <td>
                    <span class="badge rounded-pill bg-warning text-dark">Pending</span>
                  </td>
                  <td class="button-table">
                    <button type="button" class="btn btn-info rounded-pill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                        <i class="bi bi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-success rounded-pill">
                        <i class="bi bi-check-circle"></i>
                    </button>
                    <button type="button" class="btn btn-danger rounded-pill">
                        <i class="bi bi-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Isman</td>
                    <td>Teri</td>
                    <td>Ikan</td>
                    <td>Rp. 15.000</td>
                    <td>Cash</td>
                    <td>COD</td>
                    <td>
                      <span class="badge rounded-pill bg-success text-white">Terkonfirmasi</span>
                    </td>
                    <td class="button-table">
                        <button type="button" class="btn btn-info rounded-pill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button type="button" class="btn btn-success rounded-pill">
                            <i class="bi bi-check-circle"></i>
                        </button>
                        <button type="button" class="btn btn-danger rounded-pill">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
  </div>

    <!-- End Table with stripped rows -->
    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pesanan</h5>
                <button type="button" class="btn-close rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <div class="form">
                            <label for="floatingName">Nama Pembeli</label>
                            <input type="text" class="form-control" id="floatingName" placeholder="Joko" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="floatingName">Nomor Telp :</label>
                            <input type="text" class="form-control" id="floatingName" placeholder="0821372421" disabled>
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form">
                            <label for="floatingPassword">Jenis Pembayaran</label>
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Bank Transfer" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="floatingPassword">Metode Pengiriman</label>
                            <input type="password" class="form-control" id="floatingPassword" placeholder="JNE REG" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="floatingTextarea">Alamat Pengiriman</label>
                            <textarea class="form-control" placeholder="Jl. Jalan ke Kota Batu" id="floatingTextarea" style="height: 100px;" disabled></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form">
                                <label for="floatingCity">Kecamatan</label>
                            <input type="text" class="form-control" id="floatingCity" placeholder="Batu" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form mb-3">
                            <label for="floatingSelect">Kota</label>
                            <input type="text" class="form-control" id="floatingCity" placeholder="Malang" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form">
                            <label for="floatingZip">Kode Pos</label>
                            <input type="text" class="form-control" id="floatingZip" placeholder="12312" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="col-md-12">
                          <div class="form">
                                <label for="floatingPayment">Status Pesanan : </label>
                                <button type="button" class="btn btn-warning mb-2 rounded-pill">
                                    Pending <i class="bi bi-clock"></i>
                                </button>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-2">
                        <div class="col-md-12">
                          <div class="form">
                                <label for="floatingPayment">Status Pembayaran : </label>
                                <button type="button" class="btn btn-success mb-2 rounded-pill">
                                    Terkonfirmasi <i class="bi bi-patch-check-fill"></i>
                                </button>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-2">
                        <div class="col-md-12">
                          <div class="form">
                                <label for="floatingPayment">Print Struk : </label>
                                <a href="{{ route('point_of_sale') }}" type="button" class="btn btn-primary mb-2 rounded-pill">
                                    Print <i class="bi bi-printer"></i>
                                </a>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-12">
                        <div class="col-md-12">
                          <div class="form">
                                <label for="floatingPayment">Bukti Pembayaran : </label>
                                <input name="image" class="form-control" type="file" id="formFile" disabled>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-12">
                        <div class="form">
                          <label for="floatingEmail">Barang yang dipesan :</label>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">No </th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Banyakk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Total Harga</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Bayam</td>
                                <td>2</td>
                                <td>Rp. 3.000</td>
                                <td>Rp. 6.000</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Bayam</td>
                                <td>2</td>
                                <td>Rp. 3.000</td>
                                <td>Rp. 6.000</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Bayam</td>
                                <td>2</td>
                                <td>Rp. 3.000</td>
                                <td>Rp. 6.000</td>
                              </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" style="font-weight: 900; text-align: left;">Total Pembayaran :</td>
                                    <td style="font-weight: 900;">Rp. 18.000</td>
                                </tr>
                            </tfoot>
                          </table>
                      </div>
                    </div>
                  </form><!-- End floating Labels Form -->
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
  <!-- End  Modal-->
@endsection