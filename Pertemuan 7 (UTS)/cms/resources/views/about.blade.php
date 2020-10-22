@extends('layouts.app')

@section('header', 'about')

@section('sidebar')
    @parent
    <p>ABOUT ME</p><br>
@endsection

@section('konten')
    <p>Nim : {{ $nim }} <br> Nama : {{ $nama }}</p>
@endsection

