@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Input Users</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Form Users</div>
        </div>
      </div>

      <section class="Form">
        <div class="card">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <form action="/tambahusers" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Pengguna</label>
                                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Divisi</label>
                                <select class="form-control" name="id" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">Umum</option>
                                  <option value="2">Admin</option>
                                  <option value="3">Body&Paint</option>
                                  <option value="4">Bengkel</option>
                                  <option value="5">Sales</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Lokasi</label>
                                <select class="form-control" name="idl" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">Head Office</option>
                                  <option value="2">Body&Paint</option>
                                  <option value="3">Payakumbuh</option>
                                  <option value="4">Pasaman Barat</option>
                                  <option value="5">Dharmasraya</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-2 mt-3"</button>Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
