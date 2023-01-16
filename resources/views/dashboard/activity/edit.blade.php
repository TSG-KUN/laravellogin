@extends('dashboard.layouts.main')

@section('container')
<div class="mt-2 mb-2">
    <h2> Mengedit Cuy </h2>
</div>
<form action="{{ route('dashboard.news.update', $activity->id) }}" method="POST">
    @method('patch')
    @csrf
    <div class="mb-3 mt-3">
        <label class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" placeholder="Porseni" name="namakeg" value="{{ old('body',$activity->namakeg) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Pelaksanaan</label>
        <input name="tgl" type="date" class="form-control" value="{{ old('body',$activity->tgl) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Tempat Pelaksanaan</label>
        <input name="tempat" type="text" class="form-control" value="{{ old('body',$activity->tempat) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Penanggung Jawab</label>
        <input type="text" class="form-control" name="PJ" value="{{ old('body',$activity->PJ) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Biaya</label>
        <input type="number" class="form-control" name="biaya" value="{{ old('body',$activity->biaya) }}">
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>
    <a href="/dashboard/news" class="btn btn-danger">Cancel</a>
</form>
@endsection