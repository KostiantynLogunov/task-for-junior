<!DOCTYPE HTML>
<!--
	Royale by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Royale by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/skel.min.js') }}"></script>
    <script src="{{ asset('assets/js/skel-panels.min.js') }}"></script>
    <script src="{{ asset('assets/js/init.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/skel-noscript.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style-desktop.css') }}" />
    </noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body class="homepage">

<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <div id="logo">
            <h1><a href="/">Royale</a></h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="active"><a href="/">Homepage</a></li>
                <li>
                    {{--<div class="dropdown">--}}
                    <a class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(isset($current_category) && !empty($current_category))
                            {{ $current_category->title }}
                        @else
                            Choose category
                        @endisset

                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <form method="POST" action="{{ route('home.index') }}" accept-charset="UTF-8">
                            {{ csrf_field() }}

                            <button type="submit" class="dropdown-item">All</button>
                            <input type="hidden" name="category_id" value="All" />
                        </form>
                        @isset($categories)
                            @foreach($categories as $category)
                                <form method="POST" action="{{ route('home.index') }}" accept-charset="UTF-8">
                                    {{ csrf_field() }}

                                    <button type="submit" class="dropdown-item">{{$category->title}}</button>
                                    <input type="hidden" name="category_id" value="{{ $category->id }}" />
                                </form>
                                {{--<a class="dropdown-item" href="{{ route('', ['$category_id'=>$category->id]) }}">{{$category->title}}</a>--}}
                            @endforeach
                        @endisset

                    </div>
                    {{--</div>--}}
                </li>
                <li>
                    <a href="{{ route('home.left') }}">Left Sidebar</a>
                </li>
                <li>
                    <a href="{{ route('home.right') }}">Right Sidebar</a>
                </li>
                <li>
                    <a href="{{ route('home.noslider') }}">No Sidebar</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->

<!-- Banner -->
<div id="banner">
    <div class="container">


    </div>
</div>
<!-- /Banner -->

<!-- Main -->
@yield('content')
<!-- /Main -->

<!-- Footer -->
<div id="footer">
    <div class="container">
        <section>
            <header>
                <h2>Pellentesque vulputaterisus semper</h2>
                <span class="byline">In posuere eleifend semper augue maecenas ligula congue rutrum</span>
            </header>
            <div class="row">
                <section class="4u">
                    <a href="#" class="image full"><img src="{{ asset('/assets/images/pics03.jpg') }}" alt=""></a>
                </section>
                <section class="4u">
                    <a href="#" class="image full"><img src="{{ asset('/assets/images/pics04.jpg') }}" alt=""></a>
                </section>
                <section class="4u">
                    <a href="#" class="image full"><img src="{{ asset('/assets/images/pics06.jpg') }}" alt=""></a>
                </section>
            </div>
            <a href="#" class="button">Nulla luctus eleifend</a>
        </section>
    </div>
</div>
<!-- /Footer -->

<!-- Copyright -->
<div id="copyright">
    <div class="container">
        Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>