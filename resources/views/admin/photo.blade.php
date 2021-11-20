@extends('layouts.app')
@include('layouts.adnavbar')
@section('content')
<div class="container">
    <div class="d-flex">
        @foreach ($photos as $ph)
        <div class="m-1 border p-1">
            <div class="is-c">
                <img  src="{{'storage/'. $ph->photo_path}}" alt="">
            </div>
            <div class="d-flex justify-content-between align-items-center py-2 px-0">
                <form action="/portfolio/{{$ph->id}}" method="post">
                @csrf
                @method('DELETE')
                    <button class="bg-white border-0 text-cetner" type="submit">
                        <img src="image/icon/trash.svg" alt="">
                    </button>
                </form>
                <span class="me-2">edit</span>
                <span class="me-2">save</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection