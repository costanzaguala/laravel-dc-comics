@extends('layouts.app')

@section('page-title', 'Comic Create')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Comic Create
            </h1>

            <form action="{{ route('comics.store') }}" method="post">
                @csrf {{-- <--- A cosa serve? --}}

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text " class="form-control" id="title" name="title" placeholder="Insert title" required maxlength="256">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description" required maxlength="1024"></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text " class="form-control" id="thumb" name="thumb" placeholder="Insert thumbnale" maxlength="1024">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number " class="form-control" id="price" name="price" placeholder="Insert price" min="1.00" step="0.01">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text " class="form-control" id="series" name="series" placeholder="Insert series" required maxlength="64">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date " class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text " class="form-control" id="type" name="type" placeholder="Insert type" required maxlength="32">
                </div>


                <div class="mb-3">
                    <label for="artists">Artists</label>
                    <input type="text " id="artists" name="artists" class="form-control" aria-describedby="Artists-help">
                    <div id="Artists-help" class="form-text text-muted">
                      Insert artists separated by commas.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="writers">Writers</label>
                    <input type="password" id="writers" name="writers" class="form-control" aria-describedby="Writers-help">
                    <div id="Writers-help" class="form-text text-muted">
                      Insert writers separated by commas.
                    </div>
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
