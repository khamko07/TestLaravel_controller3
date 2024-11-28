@extends('layout')
@section('title', 'Register')
@section('content')
<div class="form-register">
    <h1>Register</h1>
    <form method="POST" action="/insert">
        <label for="fullname">Fullname:</label>
        <input type="text" id="fullname" name="fullname" required placeholder="Enter fullname...">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter email...">
        <label for="phone">Phone number:</label>
        <input type="text" id="phone" name="phone" required placeholder="Enter phone number...">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required placeholder="Enter address...">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter password...">
        <label for="confirm_password">Confirm password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required
            placeholder="Enter confirm password...">
        <button type="submit">Register</button>
    </form>
    @yield('style')
    <style>
        .form-register {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .form-register h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-register label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-register input[type="text"],
        .form-register input[type="email"],
        .form-register input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-register button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .form-register button:hover {
            background-color: #0056b3;
        }
    </style>
</div>
@endsection
