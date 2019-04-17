@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Post Buku
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
      <form method="post" action="{{ route('post.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Judul</label>
              <input type="text" class="form-control" name="judul"/>
          </div>
          <div class="form-group">
              <label for="price">Pengarang</label>
              <input type="text" class="form-control" name="pengarang"/>
          </div>
          <div class="form-group">
              <label for="quantity">Penerbit</label>
              <input type="text" class="form-control" name="penerbit"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tahun Terbit</label>
              <input type="text" class="form-control" name="tahun_terbit"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection