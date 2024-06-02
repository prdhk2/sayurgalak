@extends('layouts.frontend')
@section('content')

<!-- product display -->
<div class="container">
    <div class="row">
        <!-- Kategori Card -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Pilih Kategori</h5>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($categories as $category)
                    <li class="list-group-item">
                        <a href="{{ route('categories.index', $category->id) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Kategori Card end -->

        <!-- New Product -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">Produk Terbaru</h2>
                </div>
                <div class="col-6 text-end">
                    <a href=""> Lihat Semua</a>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('images/' . $product->image) }}" alt="Product Image" style="height: 200px; object-fit: cover; border-radius: 10%;">
                            
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-start">
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <span class="badge rounded-pill bg-success text-white">Rp.{{ number_format($product->price, 2) }}</span>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" style="display: inline-flex;">
                                <div class="text-center m-2 text-end">
                                    <p class="text-muted mb-0 ml-3">Tersisa: <span class="fw-bold">{{ $product->stock }}</span></p>
                                </div>
                                <div class="text-center m-2 text-end">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Detail</a>
                                    <a href="#" class="btn btn-outline-dark mt-auto"><i class="bi bi-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- New Product end -->
        </div>
        <div class="row">

        <!-- Kategori Card -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Ada Kupon <span class="text-red">NICH !!</span></h5>
                </div>
    
            </div>
        </div>
        <!-- Kategori Card end -->
        <!-- Hot Sales -->
        <div class="hot-sale col-md-9">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">Produk Terlaris</h2>
                </div>
                <div class="col-6 text-end">
                    <a href=""> Lihat Semua</a>
                </div>
            </div>
        </div>
        <!-- Hot Sales end -->
                    
        </div>
    </div>
</div>
<!-- product display end -->

@endsection
@section('script')

@endsection
