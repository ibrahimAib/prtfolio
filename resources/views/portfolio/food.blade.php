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
    <section id="food" class="mt-1" style="height: 100%"> 
        <div class="line1" id="jk">
            <div id="food1" class="d-flex h2-f-photo scrollbar ">
                <button type="button" class="but border-0" id="left" onclick="left('#food1')">
                    <img src="image\icon\arrow-l.svg" alt="">
                </button>
                <button type="button" class="but border-0 right" id="right" onclick="right('#food1')">
                    <img src="image/icon/arrow-r.svg" alt="">
                </button>
                @foreach ($line1 as $ph)
                <button class="img-btn" onclick="show('{{$ph->id}}')">
                    <div class=" mr-1 mb-1">
                        <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                    </div>
                </button>
                <div class="cliked" id="{{$ph->id}}" onclick="hide('{{$ph->id}}')">
                    <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                </div>

                @endforeach
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
            <div class="line2">
                <div id="food2" class="h1-f-photo scrollbar">
                    <button type="button" class="but border-0" id="left-d" onclick="left('#food2')">
                        <img src="image\icon\arrow-l.svg" alt="">
                    </button>
                    <button type="button" class="but border-0" id="right-d" onclick="right('#food2')">
                        <img src="image/icon/arrow-r.svg" alt="">
                    </button>
                    <div class=" d-flex">
                        @foreach ($line2 as $ph)
                        <button class="img-btn" onclick="show('{{$ph->id}}')">
                            <div class=" mr-1 mb-1">
                                <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                            </div>
                        </button>
                        <div class="cliked" id="{{$ph->id}}" onclick="hide('{{$ph->id}}')">
                            <img  src="{{'storage/'. $ph->photo_path}}" alt="">
                        </div>

                        @endforeach

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
            </div>

    </section>
    
@endsection