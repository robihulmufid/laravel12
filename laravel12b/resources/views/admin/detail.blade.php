@extends('admin.profil')
@section('title', 'Detail Profil Mufid')
@section('content')
    <h1>Detail Profil</h1>
    <p>Ini adalah halaman detail profil</p>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
@endsection
