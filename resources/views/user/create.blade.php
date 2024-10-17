@extends('template.app')

@section('content-dinamis')
<div class="card-body">
    <div class="form-wrapper mx-auto mt-5 p-4 bg-light rounded shadow-sm" style="max-width: 600px;">
        <h3 class="text-center mb-4">Tambahkan Akun</h3>
        <form action="{{route('simpan-akun')}}" method="POST">
            @csrf
            <!-- Nama -->
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>

            <!-- Gmail -->
            <div class="form-group mb-3">
                <label for="gmail" class="form-label">Gmail</label>
                <input type="email" id="gmail" name="gmail" class="form-control" placeholder="Masukan Gmail" required>
            </div>

            <!-- Password -->
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required>
            </div>

            <!-- Pilih Role -->
            <div class="form-group mb-4">
                <label for="role" class="form-label">Pilih Role</label>
                <select id="role" name="role" class="form-select" required>
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success w-45 px-4 py-2 shadow-sm">Tambahkan Data</button>
                <a href="{{ route('page-akun') }}" class="btn btn-danger w-45 px-4 py-2 shadow-sm">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
