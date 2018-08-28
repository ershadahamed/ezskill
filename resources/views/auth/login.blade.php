@extends('layouts.auth')

@section('title', 'Login | EzSkill')
@section('class-name', 'login-page')

@section('content')
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">PPT ezSkill</a>
            <small>Daftar Masuk</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="msg">Daftar Masuk Untuk Mulakan Sesi Anda</div>
                    <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" id="ic_num" class="form-control" name="ic_num" placeholder="ID Pengguna" value="{{ old('ic_num') }}" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" id="password" class="form-control" name="password" placeholder="Katalaluan" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" id="remember" class="filled-in chk-col-pink" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Ingat Saya</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Masuk</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{ route('register') }}">Daftar Sekarang!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{ route('password.request') }}">Lupa Katalaluan?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        $(function () {

            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            swal({
                title: "Invalid Data",
                text: "{{$error}}",
                icon: "warning",
                button: true,
            });
            @endforeach
            @endif

            $('#sign_in').validate({
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
