@extends('layouts.app')
@section('title', '| Payment Setting')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Payment Setting
                    <small>Available payment structure for calon</small>
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-teal">
                            <h2>
                                NEW PAYMENT
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('pay-setting.index') }}">Payment List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                            <div class="row clearfix">
                                <form id="form_validation" method="POST" action="{{ route('pay-setting.store') }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <div class="form-line">
                                                <input type="number" name="amount" placeholder="000000" class="form-control date" required>
                                            </div>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">?</span>
                                            <div class="form-line">
                                                <textarea required name="desc" id="desc" rows="2" class="form-control" placeholder="Short Description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 align-right">
                                        <button class="btn btn-primary waves-effect" type="submit">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-script')
    <script type="text/javascript">
    </script>
@endsection