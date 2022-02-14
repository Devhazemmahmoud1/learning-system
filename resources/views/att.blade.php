@extends('layouts.app')

@section('content')
    <div class="container">
        <h5 style="text-align: center; margin-bottom: 20px;">Please insert a student Serial number </h5>
        <h5 style="text-align: center; margin-bottom: 20px; color: green;">{{ Session::get('success')}}</h5>
        <h5 style="text-align: center; margin-bottom: 20px; color: red;">{{ Session::get('error')}}</h5>
        <form method="POST" action="/user/attendance">
            @csrf
            <div class="row justify-content-lg-center">
                <div class="col-lg-6">
                    <input class="form-control" type="text" name="userSerial">
                </div> </br>
                <div class="col-lg-6">
                    <button class="btn btn-primary form-control" type="submit">Add a student serial</button>
                </div>
            </div>
        </form>
    </div>
@endsection