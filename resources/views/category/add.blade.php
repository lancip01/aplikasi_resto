@extends('layouts.main')

@section('content')
<a href='/tambahdatakcategory' type="button" class="btn btn-primary">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">kategori</th>
    </tr>

  </thead>
  @php
     $no=1
  @endphp
  <tbody>
    @foreach($data as $row)
    <tr>
      <th scope="row">1</th>
      <td>{{ $row->kategori}}</td>
      <td>
      <form action="/deletedatacategory/{{$row->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <a type="button" href="/tampilancategory/{{$row->id}}" class="btn btn-warning">Edit</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection