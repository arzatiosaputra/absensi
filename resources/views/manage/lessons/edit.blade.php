@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class="text-secondary">
                        Enter the information to add a new lesson, enter the data correctly
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('update.lesson', $lesson->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Guru</label>
                                    <select name="teacher" id="" class="form-control">
                                        <option value="">Pilih Nama Guru</option>
                                        <option value="Udin">Udin</option>
                                        <option value="Teguh">Teguh</option>
                                        <option value="Supri">Supri</option>
                                        <option value="Gunawan">Gunawan</option>
                                        <option value="Siti">Siti</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="class" id="" class="form-control">
                                        <option value="">Pilih Nama Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Pelajaran</label>
                                    <input type="text" name="name" id="" value="{{$lesson->name}}" class="form-control"
                                        placeholder="Nama Pelajaran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam masuk</label>
                                    <input type="time" name="jam_masuk" value="{{$lesson->jam_masuk}}" id="" class="form-control"
                                        placeholder="Jam masuk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam Selesai</label>
                                    <input type="time" name="jam_selesai" id="" value="{{$lesson->jam_selesai}}" class="form-control"
                                        placeholder="Jam selesai">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Add New Lesson</button>
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
