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
            <tbody>
                <tr>
                    @foreach ($activities as $activity)
                    {{-- CONTOH PENAMBAHAN/PERBAIKAN --}}
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $activity->namakeg }} </td>
                    <td> {{ $activity->tgl }} </td>
                    <td> {{ $activity->tempat }} </td>
                    <td> {{ $activity->PJ }} </td>
                    <td> {{ $activity->biaya }} </td>
                    <td>
                        <a href="/dashboard/news/{{ $activity->id }}/edit" class="btn btn-warning"> <i class="lar la-edit"></i> </a>
                        <form action="/dashboard/news/{{ $activity->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('are you sure?')"> <i class="las la-trash"></i> </button>
                        </form>
                        {{-- <a href="" class="btn btn-danger"> <i class="las la-trash"></i> </a> --}}
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    
@endsection