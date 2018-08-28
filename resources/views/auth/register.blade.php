@extends('layouts.auth')

@section('title', 'Register | EzSkill')
@section('class-name', 'signup-page')

@section('content')
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">PPT ezSkill</a>
            <small>Pendaftaran Calon Terbuka</small>
            <div>
                <ul class="bg-red">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="body">
                <form id="wizard_with_validation" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h3>Maklumat Akaun</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="ic_num" required autofocus>
                                <label class="form-label">No Kad Pengenalan tanpa (-)</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" id="password" required>
                                <label class="form-label">Katalaluan*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                                <label class="form-label">Katalaluan Yang Sama*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control" required>
                                <label class="form-label">Sila masukkan email yang sah dan digunakan kerap*</label>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Maklumat Peribadi</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" required>
                                <label class="form-label">Nama Penuh</label>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="address_one" class="form-control" required>
                                        <label class="form-label">Alamat Baris 1</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="address_two" class="form-control">
                                        <label class="form-label">Alamat Baris 2</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="postcode" class="form-control" required>
                                        <label class="form-label">Postcode</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="state" class="form-control" required>
                                        <label class="form-label">Negeri</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="city" class="form-control" required>
                                        <label class="form-label">Bandar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="phone_fixed" class="form-control" required>
                                        <label class="form-label">No Tel Rumah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="phone_mobile" class="form-control" required>
                                        <label class="form-label">No Tel Bimbit</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="phone_fax" class="form-control">
                                        <label class="form-label">No Tel Fax</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Terma & Syarat</h3>
                    <fieldset>
                        <p>
                            Segala maklumat yang diberikan adalah benar. <a href="#">Terma & Syarat</a>
                        </p>
                        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                        <label for="acceptTerms-2">Saya setuju dengan terma dan syarat</label>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('custom-script')
    <script>
        $(function () {
            //Advanced form with validation
            var form = $('#wizard_with_validation').show();
            form.steps({
                headerTag: 'h3',
                bodyTag: 'fieldset',
                transitionEffect: 'slideLeft',
                onInit: function (event, currentIndex) {
                    $.AdminBSB.input.activate();

                    //Set tab width
                    var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
                    var tabCount = $tab.length;
                    $tab.css('width', (100 / tabCount) + '%');

                    //set button waves effect
                    setButtonWavesEffect(event);
                },
                onStepChanging: function (event, currentIndex, newIndex) {
                    if (currentIndex > newIndex) { return true; }

                    if (currentIndex < newIndex) {
                        form.find('.body:eq(' + newIndex + ') label.error').remove();
                        form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
                    }

                    form.validate().settings.ignore = ':disabled,:hidden';
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex) {
                    setButtonWavesEffect(event);
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ':disabled';
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    // swal("Teruskan jika maklumat yang diberi telah lengkap")
                    // .then((value) => {
                    // swal("Tahniah", "Maklumat berjaya dihantar", "success");
                    form.submit();
                    // });
                    // swal("Tahniah", "Anda telah didaftar", "success");
                }
            });

            form.validate({
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                },
                rules: {
                    'password_confirmation': {
                        equalTo: '#password'
                    }
                }
            });
        });

        function setButtonWavesEffect(event) {
            $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
            $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
        }
    </script>
@endsection
