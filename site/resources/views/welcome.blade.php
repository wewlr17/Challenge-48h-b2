@extends('layouts.app')

@section('content')



            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('logout') }}">Disconnect</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>

            @endif -->

            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div style="height: 350px" class="carousel-inner">
                    <div class="carousel-item active" data-interval="5000">
                    <img style="height: 600px; margin-top: -200px" src="https://i2.wp.com/monskateelectrique.fr/wp-content/uploads/2017/12/skate-electrique-photo1.jpg?resize=1280%2C720&ssl=1" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="5000">
                    <img style="height: 600px; margin-top: -200px" src="https://trottineteelectrique.online/wp-content/uploads/acheter-skate-electric-3-1024x576.jpg" class="d-block w-100" alt="...">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="container">

                <div class="card" style="margin-left: 10%; width: 80%; margin-top: 50px">
                    <img style="height: 400px" src="https://i0.wp.com/www.blablahightech.fr/wp-content/uploads/2016/06/maxresdefault.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

@endsection