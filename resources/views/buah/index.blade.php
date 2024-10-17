@extends('template.app')

@section('content-dinamis')
<style>
    /* Custom styles */
    .welcome-heading {
        margin-top: 80px;
        text-align: center;
    }
    .welcome-text {
        font-size: 1.2rem;
        margin-left: 30px;
        text-align: center;
    }
    .footer {
        background-color: #f8f9fa;
        padding: 10px 0; /* Padding footer */
        margin-top: 20px; /* Tambahkan margin atas untuk memberi jarak dari konten */
    }
    .footer h6 {
        font-weight: bold;
        margin-left: 40px;
    }
    .footer p {
        color: #6c757d;
    }
    .footer-content {
        display: flex;
        justify-content: space-between;
        margin-left: 20px; /* Margin untuk footer content */
        margin-right: 20px; /* Margin untuk footer content */
    }
    .footer2 {
        text-align: center;
        margin-top: 5px; /* Margin atas untuk footer copyright */
        color: #6c757d;
        font-size: 0.85rem; /* Ukuran font lebih kecil */
    }

    /* Box styling */
    .box-section {
        margin-top: 50px;
        text-align: center;
    }
    .fruit-box {
        background-color: #007bff; /* Warna biru */
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .fruit-box:hover {
        transform: scale(1.05);
    }
    .fruit-box h5 {
        font-weight: bold;
    }
    .fruit-box p {
        font-size: 1rem;
    }
</style>

<div class="container">
    <h2 class="welcome-heading">
        Selamat Datang 
        <small class="text-muted">Di Aplikasi Pengolahan Data Buah</small>
        <hr>
    </h2>
    <p class="welcome-text">Hanya Bisa Di Akses Oleh <strong>Admin</strong> dan <strong>Kasir</strong>Saja</p>

    <!-- Section for Fruit Content -->
    <div class="row box-section">
        <!-- Box 1: Buah Lokal -->
        <div class="col-md-4">
            <div class="fruit-box">
                <h5>Buah Lokal</h5>
                <p>Menjual berbagai macam buah lokal segar yang berasal dari petani lokal di Indonesia.</p>
            </div>
        </div>

        <!-- Box 2: Buah Impor -->
        <div class="col-md-4">
            <div class="fruit-box">
                <h5>Buah Impor</h5>
                <p>Kami menyediakan buah impor berkualitas tinggi dari seluruh dunia dengan harga terjangkau.</p>
            </div>
        </div>

        <!-- Box 3: Promo Buah -->
        <div class="col-md-4">
            <div class="fruit-box">
                <h5>Promo Buah</h5>
                <p>Jangan lewatkan promo buah setiap minggunya! Dapatkan diskon besar untuk buah-buahan favorit Anda.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="store-info">
            <h6>JualBuah.ID</h6>
            <p>JualBuah.ID adalah sebuah toko online<br> yang menjual berbagai macam jenis<br> buah-buahan lokal dan impor.</p>
        </div>
        <div class="address">
            <h6>Alamat</h6>
            <p>Jalan Mangga No 98 Jakarta Timur</p>
        </div>
    </div>
    <div class="footer2">
        <p>Copyright@JualBuah.ID 2024</p>
    </div>
</footer>

@endsection
