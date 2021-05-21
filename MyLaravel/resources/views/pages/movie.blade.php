@extends('layouts.main-layout')

@section('content')

    <main>
        
        <table>
            <tr>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->nationality }}</td>
                <td>{{ $movie->date }}</td>
                <td>{{ $movie->vote }}</td>
            </tr>
        </table>

    </main>
    
@endsection