@extends('layouts.app')

@section('content')
    <h1>Edit Artikel</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Isi Artikel</label>
            <textarea class="form-control" name="content" id="content">{{ $article->content }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Gambar Artikel</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <p>Image Sebelumnya: <img src="{{ asset('images/' . $article->image_path) }}" width="100"></p>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
