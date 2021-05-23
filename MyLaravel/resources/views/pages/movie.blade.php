@extends('layouts.main-layout')

@section('content')

    <main class="centering">
        
        <table>
            <tr>
                <td>Title: </td>
                <td>{{ $movie->original_title }}</td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td>{{ $movie->nationality }}</td>
            </tr>
            <tr>
                <td>Date: </td>
                <td>{{ $movie->date }}</td>
            </tr>
            <tr>
                <td>Vote: </td>
                <td>{{ $movie->vote }}</td>
            </tr>
        </table>

    </main>
    
@endsection