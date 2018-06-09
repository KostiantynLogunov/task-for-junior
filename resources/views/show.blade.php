@extends('layouts.home')

@section('content')

    <div id="main">

        <div  class="container">
                        <header class="text-center">
                            <h2>{{ $product->title }}</h2>
                        </header>
                        <div class="image1  text-center">
                            <img  src="/images/{{$product->image}}" alt="{{$product->image}}" style="max-height: 500px;">
                        </div>
                        <p>{!! $product->description !!}</p>
                        <a href="{{ route('home.index') }}" class="button">Back</a>
        </div>



    </div>
@endsection
