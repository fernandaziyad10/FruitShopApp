@extends('template.app')

@section('content-dinamis')
<style>
    /* Custom styles */
    .content {
        margin: 20px; /* Margin for content */
        background-color: #f0f8ff; /* Light blue background for the content */
        border-radius: 0.5rem; /* Rounded corners */
        padding: 20px; /* Padding inside the content */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .card {
        margin-bottom: 20px; /* Space between card and table */
        border: none; /* No border for cards */
    }

    .card-header {
        background-color: hsl(0, 0%, 96%); /* Card header background */
        color: rgb(0, 0, 0); /* White text for header */
        border-radius: 0.5rem 0.5rem 0 0; /* Rounded top corners */
    }

    .table {
        border-radius: 0.5rem; /* Rounded corners for table */
        overflow: hidden; /* Hide overflow */
    }

    .table thead th {
        background-color: #0056b3; /* Darker blue for table header */
        color: white; /* White text for header */
    }

    .table tbody tr:hover {
        background-color: #e6f7ff; /* Light blue on row hover */
    }

    .alert {
        margin-bottom: 20px; /* Space between alert and other content */
        border-radius: 0.5rem; /* Rounded corners for alerts */
    }

    .action-buttons {
        display: flex; /* Flexbox for action buttons */
        gap: 10px; /* Space between buttons */
    }

    .btn-success {
        margin-left: auto; /* Align add button to the right */
    }

    .btn-warning {
        background-color: #ffc107; /* Warning button color */
        border-color: #ffc107; /* Border color for warning button */
        color: #212529; /* Dark text for contrast */
        transition: background-color 0.3s; /* Smooth transition */
    }

    .btn-warning:hover {
        background-color: #e0a800; /* Darker yellow on hover */
        border-color: #d39e00; /* Darker border on hover */
    }

    .btn-danger {
        transition: background-color 0.2s; /* Smooth transition for hover */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker red on hover */
    }

    .no-data {
        text-align: center; /* Center the no data message */
        padding: 20px; /* Add some padding */
        font-size: 1.2em; /* Increase font size */
        color: #6c757d; /* Gray color for the message */
    }
</style>

<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Daftar Buah</h4>
            <div class="card-tools">
                <a href="{{ route('create') }}" class="btn btn-success">Tambah Data Buah +</a>
            </div>
        </div>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Alert Failed -->
    @if(session('failed'))
    <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Buah</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($buah->isEmpty())
                <tr>
                    <td colspan="5" class="no-data">Tidak ada data buah.</td>
                </tr>
                @else
                    @foreach ($buah as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('buah-edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data Ini');">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
