@extends('layouts.backend')

@section('content')
<table class="table table-border">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Developer</th>
            <th>Console</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($game as $data)
        <tr>
            <td>{{ $game->count() * ($game->currentPage()-1) + $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->developer->name }}</td>
            <td>{{ $data->consoles()->get()->implode('name',',') }}</td>
            <td>{{ $data->genres()->get()->implode('name',',') }}</td>
            <td>
                <a href="{{ route('game.edit', $data) }}" class="btn btn-warning">@include('icons/edit')</a>
                <div endpoint={{ route('game.destroy', $data) }} class="delete d-inline"></div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $game->links() !!}
@endsection