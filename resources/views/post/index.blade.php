@extends('layout')
@section('content')
<style>
    .upper{
        margin-top: 100px;
    }
</style>
<div class="upper">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    @if(count($posts) == 0)
        <h1>No data yet please Enter Data</h1>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Judul</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td colspan="2">Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{route('post.show', $post->id)}}">{{$post->judul}}</a></td>
                <td>{{$post->pengarang}}</td>
                <td>{{$post->penerbit}}</td>
                <td>{{$post->tahun_terbit}}</td>
                <td><a href="{{route('post.show', $post->id)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                        @csrf
                        @method ('DELETE') <!-- Hapus data -->
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <a href="{{route('post.create')}}">
    <button class="btn btn-success">Add Book</button>
    </a>
</div>
@endsection