@extends('layout')
@section('title', 'Contact')
@section('content')
    <div class="card-contact">
        <h1>This is my contact</h1>
        <p><b>Name: </b>{{$name}}</p>
        <p><b>Email: </b>{{$email}}</p>
        <p><b>Phone: </b>{{$phone}}</p>
        <p><b>Address:</b>{{$address}}</p>
        <p><b>Skills:</b>
            @foreach ($skills as $skill)
                {{$skill}}
            @endforeach
        </p>
    </div>
    <style>
        .card-contact {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
            background-color: #f9f9f9;
        }
        .card-contact h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center
        }
        .card-contact p {
            font-size: 18px;
            margin: 10px 0;
        }
        .card-contact b {
            color: #333;
        }
    </style>

@endsection
