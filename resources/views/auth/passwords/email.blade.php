@extends('layouts.auth')

@section('title', 'Login | EzSkill')
@section('class-name', 'fp-page')

@section('content')
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">PPT <b>EzSkill</b></a>
            <small>Lupa Kata Laluan</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="msg">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Enter your email address that you used to register. We'll send you an email with your username and a link to reset your password.
                    </div>
                    <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET KATALALUAN</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ route('login') }}">Daftar Masuk!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        $(function () {
            $('#forgot_password').validate({
                highlight: function (input) {
                    console.log(input);
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.input-group').append(error);
                }
            });
        });
    </script>
@endsection