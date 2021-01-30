@extends('backend.layouts.master')
@section('title')
    Dashboard
@endsection
@section('dashboard')
    active
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Dashboard</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
