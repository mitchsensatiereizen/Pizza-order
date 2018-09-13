@extends('layouts.app')

@section('content')
<script src="{{ asset('js/music.js') }}" defer></script>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Super Mario Bros</div>
                <div class="row" style="margin-left:0px;margin-right:0px;">

            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
