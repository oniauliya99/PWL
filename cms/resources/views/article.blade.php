     
@extends('layouts.post') 

@section('header', 'artikel')

@section('sidebar')
    @parent
@endsection

@section('konten')
    <h2 style="font: bold 25px arial sans-serif; margin-bottom: 10px;">Artikel {{ $id }}</h2>
    <p>Ini adalah artikel Auliya.</p>
@endsection

@section('copyright', 'cachemgr@auliya')