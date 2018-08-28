@extends('layouts.app')
@section('title', '| Payment transaction')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Transaction
                    <small>Calon made payment to BillPlz transaction details</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-teal">
                            <h2>
                                TRANSACTION LIST
                            </h2>
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
                                        <th>IC Num</th>
                                        <th>Email</th>
                                        <th>Phone (M)</th>
                                        <th>Our Ref</th>
                                        <th>BillPlz Ref</th>
                                        <th>BillPlz Token</th>
                                        <th>Paid On</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>IC Num</th>
                                        <th>Email</th>
                                        <th>Phone (M)</th>
                                        <th>Our Ref</th>
                                        <th>BillPlz Ref</th>
                                        <th>BillPlz Token</th>
                                        <th>Paid On</th>
                                        <th>Status</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

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
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endsection