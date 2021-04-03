@extends('layouts.master')
@section('content')

<div class="row mt-5">
    <div class="col">
        <div class="card shadow">
            <div class="card-header">
                <h5>Data Siswa</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive table-striped">
                    <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $no => $data)

                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kelas}}</td>
                                <td>{{ $data->jurusan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

