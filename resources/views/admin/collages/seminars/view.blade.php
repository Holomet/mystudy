@extends('layouts.admin')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        </div>
    </div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col pt-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">View Seminar</h3>
                        </div>
                    </div>
                </div>
                 <div class="card-body">
                    <div class="row">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <td>{{ $seminar->name }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $seminar->description }}</td>
                            </tr>
                            <tr>
                                <th>Url</th>
                                <td><a href="{{ $seminar->url }}">{{ $seminar->url }}</a></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $seminar->status==1?"Active":"Inactive" }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection