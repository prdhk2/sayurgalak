@extends('layouts.admin')
@section('main')
<div class="row">
    <div>
        <button type="button" class="btn btn-primary mb-2 rounded-pill">
            Cetak <i class="bi bi-printer"></i>
        </button>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body mt-3">
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
                <div class="col-md-3">
                    <div class="col-md-12">
                      <div class="form">
                            <label for="floatingPayment">Status Pesanan : </label>
                            <button type="button" class="btn btn-warning mb-2 rounded-pill">
                                Pending <i class="bi bi-clock"></i>
                            </button>
                      </div>
                    </div>
                  </div>
                <div class="col-md-3">
                    <div class="col-md-12">
                      <div class="form">
                            <label for="floatingPayment">Status Pembayaran : </label>
                            <button type="button" class="btn btn-success mb-2 rounded-pill">
                                Terkonfirmasi <i class="bi bi-patch-check-fill"></i>
                            </button>
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
    </div>
</div>
        
@endsection