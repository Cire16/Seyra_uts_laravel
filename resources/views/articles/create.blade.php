@extends('layouts.app')

@section('content')
    <h1>Buat artikel Baru</h1>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Isi Artikel</label>
            <textarea class="form-control" name="content" id="content"></textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Gambar Artikel</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
