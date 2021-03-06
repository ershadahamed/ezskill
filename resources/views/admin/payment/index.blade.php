@extends('layouts.app')
@section('title', '| Payment List Type')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Payment List
                    <small>Available payment structure for calon</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-teal">
                            <h2>
                                PAYMENT LIST
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('pay-setting.create') }}">Add New</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Amount - RM</th>
                                        <th>Bill Plz Token</th>
                                        <th>Desc</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Amount - RM</th>
                                        <th>Bill Plz Token</th>
                                        <th>Desc</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($settings as $setting)
                                            <tr>
                                                <td>{{ $setting->name }}</td>
                                                <td>{{ number_format($setting->amount, 2) }}</td>
                                                <td>{{ number_format($setting->billpls_token) }}</td>
                                                <td>{{ $setting->description }}</td>
                                                <td>{{ $setting->updated_at->format('d-n-Y H:i:s') }}</td>
                                                <td width="10%" class="align-center"><a title="Edit" class="btn btn-info btn-xs" href=""><i class="material-icons">edit</i></a> |
                                                    <a title="Delete" class="btn btn-danger btn-xs" href=""><i class="material-icons">delete</i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>
@endsection

@section('custom-script')
    <script type="text/javascript">
        $(function () {
            $('.js-basic-example').DataTable({
                responsive: true,
                "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
            });
        });
    </script>
@endsection