@extends('layouts.app')

@section('page-title', 'Comic Update')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Comic Edit</h1>

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf

                @method('PUT') 

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Insert title" required maxlength="256" value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description" required maxlength="1024">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert thumbnale" maxlength="1024" value="{{ $comic->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Insert price" min="1.00" step="0.01" value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Insert series" required maxlength="64" value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date" value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Insert type" required maxlength="32" value="{{ $comic->type }}">
                </div>

                <div class="mb-3">
                    <label for="artists">Artists</label>
                    <input type="text" id="artists" name="artists" class="form-control" aria-describedby="Artists-help" value="{{ implode(',', json_decode($comic->artists)) }}">
                    <div id="Artists-help" class="form-text text-muted">
                      Insert artists separated by commas.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="writers">Writers</label>
                    <input type="text" id="writers" name="writers" class="form-control" aria-describedby="Writers-help" value="{{ implode(',', json_decode($comic->writers)) }}">
                    <div id="Writers-help" class="form-text text-muted">
                      Insert writers separated by commas.
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Update Comic</button>

                    <a href="{{ route('comics.index') }}" class="btn btn-warning text-white">Cancel</a>

                </div>



            </form>
        </div>
    </div>
</div>
@endsection
