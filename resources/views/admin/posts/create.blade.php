@extends('layouts.admin')

@section('pagetitle', 'Show')

@section('pageContent')

<div>
    <form class="row gy-3 m-5" method="POST" action="{{ route('admin.posts.store')}}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>

        {{-- @error('title')
            <div class="alert-error">{{ $message }}</div>
        @enderror --}}

        <div>
            <label for="creator_name">Nome:</label>
            <input type="text" id="creator_name" name="creator_name">
        </div>

        {{-- @error('title')
            <div class="alert-error">{{ $message }}</div>
        @enderror --}}

        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description">
        </div>

        {{-- @error('description')
            <div class="alert-error">{{ $message }}</div>
        @enderror --}}

        <button class="btn btn-primary col-3" type="submit">INVIA DATI AL DATABASE</button>
    </form>

    <a href="{{ route('admin.posts.index') }}">Torna all'INDEX</a>
</div>



@endsection