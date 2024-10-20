@extends('layouts.app')

@section('content')
    <h1 class="mb-4">SeyraSO | Articles</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-4">Tambah Artikel</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($article->image_path)
                        <img src="{{ asset('images/' . $article->image_path) }}" class="card-img-top img-thumbnail"
                            alt="Article Image" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/150" class="card-img-top img-thumbnail"
                            alt="Placeholder Image" style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text"><small class="text-muted">Dipublish pada :
                                {{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y') }}</small></p>
                        <p class="card-text">{{ Str::limit($article->content, 100) }}</p>

                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>

                    <div class="card-footer text-center">
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
