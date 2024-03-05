@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $comic->title }}
            </h1>

            <div class="card">
                @if ($comic->thumb)
                    <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 18rem" alt="{{ $comic->title }}">

                @endif
                <div class="card-body">
                    <h5 class="card-title">
                       Series: {{ $comic->series }}
                    </h5>
                    <ul>
                        <li>
                           Price: $ {{ $comic->price }}
                        </li>
                        <li>
                            Sale Date: {{ $comic->sale_date }}
                         </li>
                         <li>
                            Type: {{ $comic->type }}
                         </li>
                         <li>
                            Artists: 
                            <ul>
                                 @foreach (json_decode($comic->artists) as $artist)
                                    <li>
                                        {{ $artist }}
                                    </li>
                                 @endforeach
                            </ul>
                         </li>
                         <li>
                            Writers: 
                            <ul>
                                @foreach (json_decode($comic->writers) as $writer)
                                   <li>
                                       {{ $writer }}
                                   </li>
                                @endforeach
                           </ul>
                         </li>
                    </ul>
                    <p class="card-text">
                        {{ $comic->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
