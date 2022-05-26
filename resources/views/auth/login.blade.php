
@extends('body')
@section('main_body')

<h1 class="row justify-content-center mb-4">LOGIN</h1>
<div></div>
    <div class="row justify-content-center sm-4">
        <form method="POST" action="/auth-sign-in">
            @csrf
            <div class="mb-3">
                <label for="idd" class="form-label">ID</label>
                <input type="number" name="sign_id" class="form-control" id="idd" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="pass">
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>
    <br/>


@endsection
