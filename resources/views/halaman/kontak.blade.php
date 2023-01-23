@extends('layout/aplikasi')

@section('konten')
<h1>{{ $judul }}</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium,
ullam illo voluptate sit quos vel magni modi doloremque. Id, repellat?</p>
<p>
    <ul>
        <li>email: {{$kontak['email']}}</li>
        <li>youtube: {{$kontak['youtube']}}</li>
    </ul>
</p>
@endsection
