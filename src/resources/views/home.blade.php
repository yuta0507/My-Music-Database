@extends('layout.default')
@section('title', 'Home')

@section('content')
<div class="container">
    <div id="tokenSection">
        <div class="col">
            <h2 class="mt-3 mb-3">Authorization Spotify for Developers</h2>
            <div class="mb-3">
                <label for="clientId" class="form-label">Client ID</label>
                <input type="text" class="form-control" id="clientId">
            </div>
            <div class="mb-3">
                <label for="clientSecret" class="form-label">Client Secret</label>
                <input type="text" class="form-control" id="clientSecret">
            </div>
            <input type="button" value="Request Authorization" onclick="requestAuthorization()" class="btn btn-primary btn-lg">
        </div>
    </div>
</div>
<script src="{{ asset('js/spotify.js') }}"></script>
@endsection