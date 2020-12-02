@extends('layouts.backend')

@push('scripts')
<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush

@section('content')
@include('alert')
<div class="card">
    <div class="card-header">New Game</div>
    <div class="card-body">
        <form action="{{ route('game.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('game.partials.form-control')
        </form>
    </div>
</div>
@endsection