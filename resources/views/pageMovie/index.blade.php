@extends('layouts/main')

@section('component')
<div class="container mt-4">
    <h2 class="title">lista film</h2>
    <table>
        <tr>
            <th class="title-table">titolo</th>
            <th class="title-table">titolo originale</th>
            <th class="title-table">voto</th>
        </tr>
        @foreach ($movies as $singleMovie)
        <tr>
            <td class="content-table">{{ $singleMovie['title'] }}</td>
            <td class="content-table">{{ $singleMovie['original_title'] }}</td>
            <td class="content-table">{{ $singleMovie['vote'] }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection