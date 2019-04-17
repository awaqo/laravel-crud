@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Buku
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('post.update', $post->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Judul</label>
          <input type="text" class="form-control" name="judul" value={{ $post->judul }} />
        </div>
        <div class="form-group">
          <label for="price">Pengarang</label>
          <input type="text" class="form-control" name="pengarang" value={{ $post->pengarang }} />
        </div>
        <div class="form-group">
          <label for="quantity">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" value={{ $post->penerbit }} />
        </div>
        <div class="form-group">
          <label for="quantity">Tahun Terbit</label>
          <input type="text" class="form-control" name="tahun_terbit" value={{ $post->tahun_terbit }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('post.index')}}"><button class="btn btn-success">Back</button></a>
      </form>
  </div>
</div>
@endsection