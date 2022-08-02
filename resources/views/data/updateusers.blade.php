@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Details Users</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item"><a>Database</a></div>
          <div class="breadcrumb-item active">Form Details Users</div>
        </div>
      </div>

      <section class="Form">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updateusers/ {{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Hostname</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ $data->nama }}" >
                        </div>
                        <div class="mb-3">
                            <label  for="ExampleInputEmail" class="form-label">Divisi</label>
                            <select class="form-control" aria-label="Default Select example" value="{{ $data->idd }}">
                              <option selected> {{ $data->divisi->divisi }}</option>
                              <option value="PC">PC</option>
                              <option value="Laptop">Laptop</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label  for="ExampleInputEmail" class="form-label">Lokasi</label>
                            <select class="form-control" aria-label="Default Select example" value="{{ $data->idl }}">>
                              <option selected> {{ $data->lokasi->lokasi }}</option>
                              <option value="PC">PC</option>
                              <option value="Laptop">Laptop</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg mb-2 mt-3"</button>Submit</button>
                    </form>
                    {{--  <div class="d-grid gap-2 d-md justify-content-md-end">
                        <button type="submit" class="btn btn-success btn-lg mb-2  justify-content-lg-end"</button>Submit</button>
                    </div>  --}}
                    {{--  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                      </div>  --}}

                </div>
                <div class="d-md-flex justify-content-md-end mb-2 ">

                    {{--  <button type="submit" class="btn btn-success btn-lg mb-2 mt-3"</button>Submit</button>  --}}
                    {{--  <a href="" type="button" class="btn btn-primary"><i class=""></i> Hapus</a>
                    <button type="but   ton" class="btn btn-success btn-lg ms-2  justify-content-lg-end"</button>Submit</button>  --}}
                    {{--  <a href="/datausers" type="button" class="btn btn-primary btn-lg mb-2"><i class="fa-solid fa-backward"></i> Back</a>  --}}
                    {{--  <a href="/updateusers" type="button" class="btn btn-warning btn-lg mb-2"><i class="fa-solid fa-pen-to-square"></i> Back</a>  --}}
                    {{--  <a type="submit" class="btn btn-warning btn-lg mb-2  justify-content-lg-end"</button><i class="fa-solid fa-pen-to-square"></i> Edit</a>  --}}
                  </div>
            </div>

        </div>
    </div>
</section>
@endsection
