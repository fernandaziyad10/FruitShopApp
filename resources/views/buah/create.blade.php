@extends('template.app')

@section('content-dinamis')
<div class="card-body">
    <div class="form-wrapper mx-auto mt-5 p-4 bg-light rounded shadow-sm" style="max-width: 600px;">
        <h3 class="text-center mb-4">Tambahkan Pengguna</h3>
        <form action="{{ route('simpan-akun') }}" method="POST">
            @csrf
            <!-- Nama Pengguna -->
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama Pengguna</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Pengguna" required>
            </div>

            <!-- Email Pengguna -->
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukan Email" required>
            </div>

            <!-- Password Pengguna -->
            <div class="form-group mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required>
            </div>

            <!-- Role Pengguna -->
            <div class="form-group mb-4">
                <label for="role" class="form-label">Role</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success w-45 px-4 py-2 shadow-sm">Tambahkan Pengguna</button>
                <a href="{{ route('page-buah') }}" class="btn btn-danger w-45 px-4 py-2 shadow-sm">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
