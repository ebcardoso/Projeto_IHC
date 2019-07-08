@extends('template.template01-primary')

@section('login_page')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <form role="form"method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <input placeholder="Username" id="email" type="text" class="form-control" name="email"" required autofocus>
                            </div>
                            <div class="form-group">
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Cadastrar-Se</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection