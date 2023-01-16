@extends('dashboard.layouts.main')

@section('container')
  <a type="button" class="btn btn-primary mt-2" href="/dashboard/news/create">Create</a>
    <div class="table-responsive mt-2">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('success')}}
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close" type="button"></button>
        </div>
        @endif
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tanggal Pelaksanaan</th>
                    <th scope="col">Tempat Pelaksanaan</th>
                    <th scope="col">Penanggung Jawab</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
    </div>
    
@endsection