@extends('layouts.app')

@section('content')
    <div class="w-full p-6 mx-auto">
        <div class="flex items-center justify-center">
            <h4 class="mb-0 dark:text-white/80">Tambah Kriteria</h4>
        </div>
         <div class="p-5">
            <form action="{{ route('alternatif.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name_alternatif" class="block text-gray-700 text-sm font-bold mb-2">Nama Alternatif</label>
                    <input type="text" name="name_alternatif" id="name_alternatif" class="border rounded w-full py-2 px-3" required>
                </div>
                <div class="mb-4">
                    <label for="nis" class="block text-gray-700 text-sm font-bold mb-2">NIS</label>
                    <input type="text" name="nis" id="nis" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="jeniskelamin" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
                    <input type="text" name="jeniskelamin" id="jeniskelamin" class="border rounded w-full py-2 px-3">
                </div>
                <div class="mb-4">
                    <label for="tanggallahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" id="tanggallahir" class="border rounded w-full py-2 px-3">
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Simpan</button>
            </form>
        </div>
    </div>
@endsection
