@extends('dashboard.layouts.main')

@section('container')
  <a type="button" class="btn btn-primary mt-2" href="">Create</a>
    <div class="table-responsive mt-2">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tanggal Pelaksanaan</th>
                    <th scope="col">Penanggung Jawab</th>
                    <th scope="col">Biaya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($activities as $activity)
                    <td>{{ $activity->no }}</td>
                    <td> {{ $activity->namakeg }} </td>
                    <td> {{ $activity->tgl }} </td>
                    <td> {{ $activity->PJ }} </td>
                    <td> {{ $activity->biaya }} </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    
@endsection