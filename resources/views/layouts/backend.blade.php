@extends('layouts.base')

@section('baseStyles')
<link href="{{ asset('css/backend.css') }}" rel="stylesheet">
@endsection

@section('baseScripts')
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/backend.js') }}"></script>
@stack('scripts')
@endsection


@section('body')
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-md-3">
            <x-sidebar></x-sidebar>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>
@endsection