@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Input Invetaris</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Form Inventaris</div>
        </div>
      </div>

      <section class="Form">
        <div class="card">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <form action="/tambahdata" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-2 ">
                            <div class="col rounded-circle">
                                <label for="exampleInputEmail" class="form-label">Pengguna</label>
                                <input type="text" name="id_users" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col">
                                <label  for="ExampleInputEmail" class="form-label">Lokasi</label>
                                <select class="form-control" name="id_users" aria-label="Default Select example">
                                        <option>Select Option ..</option>
                                        <option value="1">Head Office</option>
                                        <option value="2">Body&Paint</option>
                                        <option value="3">Bengkel</option>
                                        <option value="4">Payakumbuh</option>
                                        <option value="5">Dharmasraya</option>
                                        <option value="6">Pasaman Barat</option>
                                </select>
                            </div>
                            <div class="col">
                                <label  for="ExampleInputEmail" class="form-label">Divisi</label>
                                <select class="form-control" name="id_users" aria-label="Default Select example">
{{--
                                    @foreach ($datas as $divisi)  --}}
                                    <option>Select Option ..</option>
                                  <option value="1">Umum</option>
                                  <option value="2">Admin</option>
                                  <option value="3">Body&Paint</option>
                                  <option value="4">Bengkel</option>
                                  <option value="5">Sales</option>
                                    {{--  @endforeach  --}}


                                </select>
                            </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Hostname</label>
                                <input type="text" class="form-control" name="hostname" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                                <input type="text" class="form-control" name="jenis" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                                <input type="text" class="form-control" name="merk" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Processor</label>
                                <input type="text" class="form-control" name="processor" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ram</label>
                                <input type="text" class="form-control" name="ram" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Graphic</label>
                                <input type="text" class="form-control" name="grafik" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Hardisk</label>
                                <input type="text" class="form-control" name="hardisk" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">SSD</label>
                                <input type="text" class="form-control" name="ssd" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">OS</label>
                                <select class="form-control" name="os" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">Win 11</option>
                                  <option value="2">Win 10</option>
                                  <option value="3">Win Server</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Legal OS</label>
                                <select class="form-control" name="isLegalos" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">Yes</option>
                                  <option value="2">NO</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Office</label>
                                <select class="form-control" name="office" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">365</option>
                                  <option value="2">OHS 2019</option>
                                  <option value="3">Open-Office</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Akun Office</label>
                                <input type="text" class="form-control" name="akunoffice" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Internet</label>
                                <select class="form-control" name="internet" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">Yes</option>
                                  <option value="2">No</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Company Email</label>
                                <input type="text" class="form-control" name="companyemail" id="exampleFormControlInput1" placeholder="">
                            </div>
                            {{--  <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">IAMS</label>
                                <select class="form-control" name="iams" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="1">Yes</option>
                                  <option value="2">NO</option>
                                </select>
                            </div>  --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">User Account</label>
                                <input type="text" class="form-control" name="useraccount" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Anydesk ID</label>
                                <input type="text" class="form-control" name="anydeskId" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-2"</button>Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


