@extends('backend.layouts.master')
@section('title')
    Circular
@endsection
@section('circular')
    active
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Circular</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Circular</li>

                        </ul>
                    </div>
                </div>
            </div>
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Job Details</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Job Title<span class="text-danger">*</span></h5>
                            <form action="{{route('circular.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Job Title<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="text" name="title" class="form-control" placeholder="Enter Job Title" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Vacancy<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="text" name="vacancy" class="form-control" placeholder="Enter Vacancy Number" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Workplace<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="text" name="workplace" class="form-control" placeholder="Job Location" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Deadline<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="date" name="date" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Salary<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="text" name="salary" class="form-control" placeholder="Enter Salary" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Job Type:<span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-control select" name="type" required="">
                                                    <option disabled selected>-- Select Job Type --</option>
                                                    <option value="1">Full Time</option>
                                                    <option value="2">Part Time</option>
                                                    <option value="3">Contractual</option>
                                                    <option value="4">Intern</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Job Context<span class="text-muted">(optional)</span></label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="job_context" id="jobcontext" cols="5" rows="3" placeholder="Job Context Details"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Responsibility<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="responsibilities" id="responsibilities" cols="5" rows="3" placeholder="Job Responsibility Details" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Educational Requirements<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="educational" id="education" cols="5" rows="3" placeholder="Job Educational Requirements Details" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Experience Requirements<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="experience" id="experience" cols="5" rows="3" placeholder="Job Experience Requirements Details" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Additional Requirements<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="additional" id="additional" cols="5" rows="3" placeholder="Job Additional Requirements Details" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Compensation & Other Benefits<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="others" id="additional" cols="5" rows="3" placeholder="Job Compensation & Other Benefits Details" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('')

@endsection

@section('')

@endsection
