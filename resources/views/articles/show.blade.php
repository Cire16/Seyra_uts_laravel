@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p><small class="text-muted">Dipublish pada : {{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y') }}</small>
    </p>
    @if ($article->image_path)
        <img src="{{ asset('images/' . $article->image_path) }}" alt="Article Image" class="img-fluid img-thumbnail mb-4"
            style="max-height: 300px; object-fit:cover;">
    @endif

    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali ke Halaman Utama</a>
@endsection
