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
                    <form action="{{route('update.class', $clas->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="name" id="" class="form-control">
                                        <option value="">Pilih Nama Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Walikelas</label>
                                    <select name="walas" id="" class="form-control">
                                        <option value="">Pilih Walikelas</option>
                                        <option value="John Doe">John Doe</option>
                                        <option value="Adam wathan">Adam Wathan</option>
                                        <option value="Sandyco">Sandyco</option>
                                        <option value="Torina">torina</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="jurusan" id="" class="form-control" value="{{$clas->jurusan}}" placeholder="Jurusan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah siswa</label>
                                    <input type="text" name="jumlah" id="" value="{{$clas->jumlah}}" class="form-control"
                                        placeholder="Jumlah Siswa">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Simpan kelas baru</button>
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
