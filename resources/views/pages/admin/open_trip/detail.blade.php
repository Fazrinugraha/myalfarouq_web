@extends('layouts.admin.main') 
@section('title', 'Admin Detail Open Trip') 
@section('content') 
<div class="main-content"> 
    <section class="section"> 
        <!-- Header Section -->
        <div class="section-header"> 
            <h1>Detail Open Trip</h1> 
            <div class="section-header-breadcrumb"> 
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div> 
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.open_trip') }}">Open Trip</a>
                </div> 
                <div class="breadcrumb-item">Detail Open Trip</div> 
            </div> 
        </div>
        
        <!-- Back Button -->
        <a href="{{ route('admin.open_trip') }}" class="btn btn-icon icon-left btn-warning">
            <i class="fas fa-arrow-left"></i> Kembali
        </a> 
        
        <!-- Open Trip Detail -->
        <div class="row mt-4"> 
            <div class="col-12 col-md-8 col-lg-6 m-auto"> 
                <article class="article article-style-c"> 
                    <div class="article-header"> 
                        <div class="article-image" data-background="{{ asset('open_trip_images/' . $open_trips->image) }}">  
                        </div> 
                    </div> 
                    <div class="article-details"> 
                        <div class="article-category">
                            <a href="#">{{ $open_trips->nama_paket }}</a>
                            <div class="bullet"></div> 
                            <a href="#">{{ $open_trips->destinasi }}</a>
                        </div> 
                        <div class="article-title"> 
                            <h2><a href="#">Harga: Rp{{ number_format($open_trips->harga, 0, ',', '.') }}</a></h2> 
                        </div> 
                        <hr> 
                        <ul class="list-unstyled">
                            <li><strong>Tanggal Berangkat:</strong> {{ date('d M Y', strtotime($open_trips->tanggal_berangkat)) }}</li>
                            <li><strong>Tanggal Pulang:</strong> {{ date('d M Y', strtotime($open_trips->tanggal_pulang)) }}</li>
                            <li><strong>Lama Keberangkatan:</strong> {{ $open_trips->lama_keberangkatan }}</li>
                            <li><strong>Star Point:</strong> {{ $open_trips->star_point }}</li>
                            <li><strong>Kuota:</strong> {{ $open_trips->kuota }}</li>
                            <li><strong>Jumlah Peserta:</strong> {{ $open_trips->jumlah_peserta }}</li>
                        </ul>
                        <hr> 
                        <p>{{ $open_trips->deskripsi_trip }}</p> 
                    </div> 
                </article> 
            </div> 
        </div> 
    </section> 
</div> 
@endsection