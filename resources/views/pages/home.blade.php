@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Surga Mie Ayam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Mamam!!</h1>
    <p class="mb-4">Berikut adalah makanan favorit anak poltek!</p>

    @include('components.card', [
        'imgsrc' => 'images/mie.jpg',
        'title' => 'Mie Ayam By Anggrek Sari',
        'desc' => 'Akan kukerjakan PBL tapi makan mie ayam dulu gusy.'
    ])
@endsection
