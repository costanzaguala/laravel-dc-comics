@extends('layouts.app')

@section('page-title', 'Comic Index')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-4">
                Comic Index
            </h1>

            <div class="mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-success btn-sm">Create new</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic->id }}
                            </th>
                            <td>
                                {{ $comic->title }}
                            </td>
                            <td>
                                $ {{ $comic->price }}
                            </td>
                            <td>
                                {{ $comic->series }}
                            </td>
                            <td>
                                {{ $comic->sale_date }}
                            </td>
                            <td>
                                {{ $comic->type }}
                            </td>
                            <td>
                                <a href="{{ route('comics.show',['comic' => $comic->id] ) }}" class="btn btn-dark my-2">More info</a>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning text-white my-2">Update</a>

                                <form class="my-2"
                                onsubmit="return confirm('Are you sure you want to delete this Comic?');"
                                action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
