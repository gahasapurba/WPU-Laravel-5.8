@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>    
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $mahasiswa as $mhs )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->email }}</td>
                                <td>{{ $mhs->jurusan }}</td>
                                <td>
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection