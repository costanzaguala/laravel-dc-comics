@extends('layouts.app')

@section('page-title', 'Comic Create')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1>
                Comic Create
            </h1>

            <form action="{{ route('comics.store') }}" method="post">
                @csrf {{-- <--- A cosa serve? --}}

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text " class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insert title" required value="{{ old('title') }}" maxlength="32">
                    
                    @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Insert description" required value="{{ old('description') }}" maxlength="1024"></textarea>
                
                    @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text " class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Insert thumbnale" required value="{{ old('thumb') }}" maxlength="1024">
                    
                    @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number " class="form-control  @error('price') is-invalid @enderror" id="price" name="price" placeholder="Insert price" min="1" max="5000" required value="{{ old('price') }}">
                
                    @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text " class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Insert series" value="{{ old('series') }}" maxlength="64">
                
                    @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date " class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Insert sale date" value="{{ old('sale_date') }}">>
                    
                    @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text " class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Insert type" required value="{{ old('type') }}" maxlength="32">
                
                    @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="artists">Artists</label>
                    <input type="text " id="artists" name="artists" class="form-control @error('artists') is-invalid @enderror" aria-describedby="Artists-help" maxlength="1024" >{{ old('artists') }}>
                    <div id="Artists-help" class="form-text text-muted">
                      Insert artists separated by commas.
                    </div>
                
                    @error('artists')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="writers">Writers</label>
                    <input type="text" id="writers" name="writers" class="form-control" aria-describedby="Writers-help" maxlength="1024" >{{ old('writers') }}>
                    <div id="Writers-help" class="form-text text-muted">
                      Insert writers separated by commas.
                    </div>
                
                    @error('writers')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
