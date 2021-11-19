@extends('layouts.app')
@section('content')
@include('layouts.navbar')
    <section class="mt-2">
        <nav class="navbar navbar-expand-md navbar-light  ">
            <div class="container d-flex justify-content-center">
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a href="/food" id="food" class="nav-link  bg-white">FOOD</a>
                        </li>
                        <li class="nav-item">
                            <a href="/drink" id="drink" class="nav-link  bg-white border-1">DRINK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </sectionc>

    <section id="drink" class="mt-1" > 
        <div class="line1">
            <div id="drink1" class="d-flex h-d-photo-1 scrollbar">
                <button type="button" class="but border-0" id="left" onclick="left('#drink1')">
                    <img src="image\icon\arrow-l.svg" alt="">
                </button>

                <button type="button" class="but border-0" id="right" onclick="right('#drink1')">
                    <img src="image/icon/arrow-r.svg" alt="">
                </button>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/2.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/1.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/2.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/1.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/3.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/4.jpg" alt="">
                </div>
                <div class=" mr-1 mb-1">
                    <img  src="storage/photos/drink/5.jpg" alt="">
                </div>
                
            </div>
        </div>
        <div class="line2">
            <div id="drink2">
                <div class="d-flex h-d-photo-2 scrollbar">
                    <button type="button" class="but border-0" id="left-d" onclick="left('#drink2')">
                        <img src="image\icon\arrow-l.svg" alt="">
                    </button>
                    <button type="button" class="but border-0" id="right-d" onclick="right('#drink2')">
                        <img src="image/icon/arrow-r.svg" alt="">
                    </button>
                    <div class=" mr-1 mb-1">
                        <img  src="storage/photos/drink/6.jpg" alt="">
                    </div>
                    <div class=" mr-1 mb-1">
                        <img  src="storage/photos/drink/8.jpg" alt="">
                    </div>
                    <div class=" mr-1 mb-1">
                        <img  src="storage/photos/drink/7.jpg" alt="">
                    </div>
                    <div class=" mr-1 mb-1">
                        <img  src="storage/photos/drink/8.jpg" alt="">
                    </div>   
                </div>
            </div>
        </div>
    </section>
@endsection