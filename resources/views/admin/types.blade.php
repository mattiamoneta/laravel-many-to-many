@extends('layouts.admin');

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Post Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ count($type->projects) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
