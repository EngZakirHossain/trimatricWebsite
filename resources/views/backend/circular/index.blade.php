@extends('backend.layouts.master')
@section('title')
    Circular List
@endsection
@section('circular_list')
    active
@endsection

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Circular List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Circular List</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Circular</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="datatable table table-stripped">
                                    <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Vacancy</th>
                                        <th>Workplace</th>
                                        <th>Deadline</th>
                                        <th>Salary</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($circular as $key=>$row)
                                        <tr>
                                            <td>{{$row->title}}</td>
                                            <td>{{$row->vacancy}}</td>
                                            <td>{{$row->workplace}}</td>
                                            <td>{{$row->date}}</td>
                                            <td>{{$row->salary}}</td>
                                            <td>
                                                @if($row->type == 1)
                                                    <p>Full Time</p>
                                                @elseif($row->type == 2)
                                                    <p>Part Time</p>
                                                @elseif($row->type == 3)
                                                    <p>Contractual</p>
                                                @elseif($row->type == 4)
                                                    <p>Intern</p>
                                                @endif
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox" data-toggle="toggle">
                                                </label>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-sm btn-white text-danger sweet_delete mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection

@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
