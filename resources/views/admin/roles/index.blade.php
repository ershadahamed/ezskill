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
            </div>
        </div>
    </section>
@endsection