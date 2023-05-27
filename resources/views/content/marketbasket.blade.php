@section('css')
    <link rel="stylesheet" href="css/marketbasket.css">
@endsection

@extends('master')

@section('title', 'Market Basket Analysis Page')

@section('content')

<div class="all-container">

    @include('partials.navbar')


    <div class="kanan-container">

        <h1 class="text-bundling">Bundling Items 1</h1>
        <div class="box-content">
            <div class="content">
                <div class="image-content" >
                    {{-- <img src="assets/image/gambar.png" class="gambar" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script type="text/javascript" defer src="{{URL::asset('assets/js/marketbasket.js')}}"></script>

@endsection
