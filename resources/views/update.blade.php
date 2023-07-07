@extends('welcome')
@section('content')

<div class="col-md-4 m-auto mt-3 p-2 border border-info">
    <h2 class="text-center">Update Student Details</h2>
    <form action="editdata" method="get">
        <div class="mb-2">
            <label for="">Student Name</label>
            <input type="text" value="{{$studentname}}" name="studentname" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input type="text" value="{{$email}}" name="email" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Technology</label>
            <input type="text" value="{{$technology}}" name="technology" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">City</label>
            <input type="text" value="{{$city}}" name="city" class="form-control">
        </div>
        <input type="hidden" name="id" value="{{$id}}">
        <button type="submit" class="btn btn-dark mt-2">Update</button>
    </form>
</div>
@endsection