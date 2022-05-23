@extends('layouts.admin')

@section('pagetitle', 'Index')

@section('pageContent')
<form action="{{ route('admin.posts.create')}}">
  <button class="btn btn-outline-dark">CREATE A NEW DATA</button>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">CREATOR'S NAME</th>
        <th scope="col">TITLE</th>
        {{-- <th scope="col">DESCRIPTION</th> --}} {{-- Non lo metto, si vedrà nello show --}}
        <th scope="col">SLUG GENERATED</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($postsData as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td class="col-1">{{ $post->creator_name }}</td>
          <td>{{ $post->title }}</td>
          <td>WIP</td>
          <td>
            <form id="show-form" action="{{ route('admin.posts.show', $post->id)}}">
              <button class="btn btn-primary">VIEW</button>
            </form>
          </td>
          <td>
            <button id="delete-btn" class="btn btn-danger">DELETE</button>
            <form id="delete-form" class="d-none" action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Clicca per confermare</button>
            </form>
          </td>
          <td>
            <form id="edit-form" action="{{ route('admin.posts.edit', $post->id)}}">
              <button class="btn btn-warning">EDIT</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection