@extends('layouts.admin')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Technology</th>
            <th scope="col">Post Count</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($technologies as $technology)
            <tr>
                <td>{{ $technology->name }}</td>
                <td>{{ count($technology->projects) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
