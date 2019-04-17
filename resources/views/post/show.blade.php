@extends('layout')
@section('content')
<div>
<div class="container">
  <div class="row">
      <legend>View Data</legend>
      <table class="table table-hover">
      <tr>
        <td>ID</td>
        <td>{{ $post->id }}</td>
      </tr>
      <tr>
        <td>Judul Buku</td>
        <td>{{ $post->judul }}</td>
      </tr>
      <tr>
        <td>Penerbit Buku</td>
        <td>{{ $post->penerbit }}</td>
      </tr>
      <tr>
        <td>Tahun Terbit Buku</td>
        <td>{{ $post->tahun_terbit }}</td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td>{{ $post->pengarang }}</td>
      </tr>
  </table>
    <a href="{{route('post.index')}}"><button class="btn btn-success">Back</button></a>
</div>
@endsection