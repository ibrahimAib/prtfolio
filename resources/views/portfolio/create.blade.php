@extends('layouts.app')
@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center ">
        <form action="/portfolio" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="photo_path" class="form-control">
        <textarea name="comption" class="form-control mt-2" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-dark mt-1">send</button>
        <select name="line" id="">
            <option value="1">طولي</option>
            <option value="2">عرضي</option>
        </select>
        </form>
    </div>
</div>
@endsection