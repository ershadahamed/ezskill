@extends('layouts.app')
@section('title', '| List of Roles')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">

                <!-- Roles Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header bg-teal">
                            <h2>Roles Info</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th width="30%">Name</th>
                                        <th width="15%">Short name</th>
                                        <th width="25%">Description</th>
                                        <th width="15%">Created At</th>
                                        <th width="15%">Updated At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->short_name }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>{{ $role->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $role->updated_at->format('d-m-Y H:i:s') }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Roles Info -->

                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">Jumlah Pengguna Berdaftar</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    MY
                                    <span class="pull-right"><b>0</b> <small>ORG</small></span>
                                </li>
                                <li>
                                    JPK
                                    <span class="pull-right"><b>0</b> <small>ORG</small></span>
                                </li>
                                <li>
                                    ADMIN
                                    <span class="pull-right"><b>1</b> <small>ORG</small></span>
                                </li>
                                <li>
                                    CO
                                    <span class="pull-right"><b>0</b> <small>ORG</small></span>
                                </li>
                                <li>
                                    PPL
                                    <span class="pull-right"><b>0</b> <small>ORG</small></span>
                                </li>
                                <li>
                                    PB
                                    <span class="pull-right"><b>0</b> <small>ORG</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>
        </div>
    </section>
@endsection