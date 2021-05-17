@extends('master')
@section('content')
<div class="container= custom-login">
<div class="row">
 <div class="col-sm-4 col-sm-offset-4">
    <form action="login" method="POST">
        <div class="form-group">
        @csrf
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
     </form>
    </div>
    </div>
    </div>
@endsection