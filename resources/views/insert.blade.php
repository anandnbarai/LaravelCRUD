@extends('welcome')

@section('content')
<!-- Button trigger modal -->
<center>
    <button type="button" class="btn btn-dark mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add Student Record
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Student Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insertData" method="post">
                        @csrf
                        <div class="mb-2">
                            <input type="text" placeholder="Enter Student Name" class="form-control" name="studentname">
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Enter Email Address" class="form-control" name="email">
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Enter Your Technology" class="form-control"
                                name="technology">
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Enter Your City" class="form-control" name="city">
                        </div>
                        <button type="submit" class="btn btn-dark mt-1">Add Record</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success mt-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</center>
<div class="container mt-5">
    <table class="table table-primary table-hover text-center">
        <thead>
            <th>ID</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Technology</th>
            <th>City</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($data as $details)
            <tr class="text-center">
                <form action="update" method="get">
                    <td><input type="hidden" name="id" value="{{$details['id']}}">{{$details['id']}}</td>
                    <td><input type="hidden" name="studentname" value="{{$details['studentname']}}">{{$details['studentname']}}</td>
                    <td><input type="hidden" name="email" value="{{$details['email']}}">{{$details['email']}}</td>
                    <td><input type="hidden" name="technology" value="{{$details['technology']}}">{{$details['technology']}}</td>
                    <td><input type="hidden" name="city" value="{{$details['city']}}">{{$details['city']}}</td>
                    <td><input type="submit" value="Update" class="btn btn-dark" name="update" id=""></td>
                    <td><input type="submit" value="Delete" class="btn btn-danger" name="delete" id=""></td>
                </form>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<!-- <table class="table table-success table-striped text-center mt-4">
    
</table> -->
@endsection