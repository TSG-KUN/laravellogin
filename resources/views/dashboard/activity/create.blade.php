@extends('dashboard.layouts.main')

@section('container')
<form method="POST" action="/dashboard/news">
    @csrf
    <div class="mb-3 mt-3">
        <label class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" placeholder="Porseni" name="namakeg">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Pelaksanaan</label>
        <input name="tgl" type="date" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Tempat Pelaksanaan</label>
        <input name="tempat" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Penanggung Jawab</label>
        <input type="text" class="form-control" name="PJ">
    </div>
    <div class="mb-3">
        <label class="form-label">Biaya</label>
        <input type="number" class="form-control" name="biaya">
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>
    <a href="/dashboard/news" class="btn btn-danger">Cancel</a>
</form>
@endsection