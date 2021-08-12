@extends('layout.app')

@section('content')

<div class="container login">
    <h2>This is the LOGIN page!</h2>
    <h4>If you do not have an account, please <a href="/">create account here</a></h4>

    <form action="">
        <label for="user">Username:</label>
        <input type="text" name="username" id="user" placeholder="username"><br>
        <label for="pass">Password:</label>
        <input type="password" name="password" id="pass" placeholder="password"><br>
        <button>Submit</button>
    </form>
</div>

@endsection
