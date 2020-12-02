@extends('layouts.backend', ['title' => $title])
@section('content')
<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('developer.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="game">Game</label>
                <select name="game" id="game" class="form-control">
                    <option disabled selected>Pilih Game</option>
                </select>
            </div> 
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection