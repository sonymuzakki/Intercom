@extends('welcome')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

@section('container')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Data Users</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item"><a>Database</a></div>
          <div class="breadcrumb-item active">Form Data Users</div>
        </div>
      </div>

      <section class="Form">
        <div class="card">
            <form action="/insert" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="table-responsive-lg">
            <table class="table">
                <a href="/formusers"  class="btn btn-primary mb-2"><i class="fa-solid fa-square-plus"></i>  Tambah Data</a>

            <thead>
            {{--  @if ( $message = Session::get('success' ))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif  --}}
            <th scope="col" class="position col-sm-1 ">No</th>
                <th scope="col">Pengguna</th>
                <th scope="col">Divisi</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>


            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $key => $row)
                <tr>
                <th scope="row">{{ $data->firstItem() + $key }} </th>
                <td>{{$row->nama}}</td>
                <td>{{ $row->divisi->divisi }}</td>
                <td>{{ $row->lokasi->lokasi }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        {{--  <a href="/details/{{ $row->id_users}}" type="button" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>  --}}
                        <a href="/details/{{ $row->id }}" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>
                    </div>
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/updateuser/ {{ $row->id }}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <a href="/delete/ {{ $row->id }}" type="button" class="btn btn-primary"><i class="fa-solid fa-trash-can"></i> Hapus</a>
                    </div>
                </td>

            </tr>
            @endforeach
            </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
