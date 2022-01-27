@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class="text-secondary">
                        Masukan informasi kelas dibawah ini dengan benar
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store.class')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select name="name" id="class" class="form-control">
                                        <option value="">Pilih nama Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Walikelas">Kelas</label>
                                    <select name="walas" id="class" class="form-control">
                                        <option value="">Pilih walikelas</option>
                                        <option value="Udin">Udin</option>
                                        <option value="Teguh">Teguh</option>
                                        <option value="Supri">Supri</option>
                                        <option value="Gunawan">Gunawan</option>
                                        <option value="Siti">Siti</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="jurusan" id="" class="form-control" placeholder="Jurusan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah Siswa</label>
                                    <input type="text" name="jumlah" id="" class="form-control" placeholder="Jumlah Siswa">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Tambah Kelas</button>
                                <a href="{{route('home')}}" class="btn btn-outline-secondary">Back To Home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
