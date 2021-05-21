@extends('layouts.main-layout')

@section('content')
    <main>

        <ul>
    
            @foreach ($movies as $movie)
    
                <li>
                    <a href="{{ route('movie', $movie->id) }}">
                        {{ $movie->id }}
                        {{ $movie->title }}
                    </a>
                </li>
    
            @endforeach
    
        </ul>
        
    </main>
@endsection