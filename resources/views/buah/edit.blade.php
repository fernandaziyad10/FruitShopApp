@extends('template.app')

@section('content-dinamis')
<style>
    /* Custom styles */
    .form-container {
        margin: 20px; /* Margin around the form */
        padding: 20px; /* Padding inside the form */
        border-radius: 0.5rem; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        background-color: #f8f9fa; /* Light background color */
    }
    .form-group {
        margin-bottom: 15px; /* Space between form groups */
    }
    .form-control {
        border-radius: 0.5rem; /* Rounded corners for input fields */
    }
    .btn-primary {
        background-color: #007bff; /* Primary button color */
        border-color: #007bff; /* Border color */
        transition: background-color 0.3s; /* Smooth transition */
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Darker blue on hover */
        border-color: #0056b3; /* Darker border on hover */
    }
</style>

<div class="form-container">
    <h4 class="mb-4">Update Data Buah</h4>

    <form action="{{ route('buah.update', $buah->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama">Nama Buah</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $buah->nama) }}" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" value="{{ old('price', $buah->price) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $buah->stock) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href={{route('page-buah')}} class="btn btn-danger">Kembali</a>
    </form>
</div>
@endsection
