@extends('layouts.app')
@section('content')
@include('layouts.navbar')
    <section class="mt-2">
        <nav class="navbar navbar-expand-md navbar-light  ">
            <div class="container d-flex justify-content-center">
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a href="/food" id="food" class="nav-link border-1 bg-white">FOOD</a>
                        </li>
                        <li class="nav-item">
                            <a href="/drink" id="drink" class="nav-link  bg-white">DRINK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </sectionc>
    <section id="food" class="mt-1"> 
        <div class="line1 h1-f-photo">
            <div class=" d-flex">
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/1.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/2.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/1.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/3.jpg" alt="">
                </div>
               
            </div>
        </div>
        <div class="line2">
            <div class="d-flex h2-f-photo">
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/4.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/5.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/6.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/8.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                <img  src="storage/photos/food/7.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/food/8.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                <img  src="storage/photos/food/7.jpg" alt="">
                </div>
                
            </div>
        </div>
    </section>
    
@endsection