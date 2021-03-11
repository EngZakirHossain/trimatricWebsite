@extends('backend.layouts.master')
@section('title')
    Client
@endsection
@section('client')
    active
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Client</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Clients</li>

                        </ul>
                    {{-- add user modal start --}}
                    <!-- Button trigger modal -->
                        <a href="#" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">

                            Add Client <i class="fas fa-plus"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="border-radius:20px;">
                                    <form class="mt-4" action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="card card-table">
                                        <div class="card-header bg-primary text-white text-center">
                                            <h4 class="card-title text-white">Add Slider</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-11 m-auto">
                                                        <div class="form-group">
                                                            <label for="">Title<span class="text-danger">*</span></label>
                                                            <textarea class="form-control " type="text" name="title" rows="4">{{ old('title') }}</textarea>
                                                            @error ('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Client Link</label>
                                                            <input class="form-control " type="text" name="link" rows="8">{{ old('link') }}
                                                            @error ('link')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Logo(Recommended: 300*300 px)<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="file" name="photo">
                                                            @error ('photo')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn-sm btn-danger" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn-primary btn-sm" type="submit">Add Client</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- add user modal end --}}



                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Client Added Not Successfully, please fill-up form correctly.
                        </div>
                    @endif
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="card card-table">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="card-title text-white">List of Client</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-center table-hover datatable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>link</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($clients as $key=>$row)

                                        <tr>
                                            <input class="Delete_val_id" type="hidden" name="id" value="{{ $row->id }}">

                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#"><img class="avatar avatar-lg ml-2 avatar-img rounded-circle" src="{{asset('storage/uploads/clients/'.$row->photo)}}" alt="slider Image"></a>
                                                </h2>
                                            </td>
                                            <td>{{ $row->title }}</td>
                                            <td>{!! \Illuminate\Support\Str::limit($row->link, 20)  !!}</td>

                                            <td>
{{--                                                <a href="#" type="button" class="btn btn-secondary">--}}
{{--                                                    <span data-feather="edit"></span>--}}
{{--                                                </a>--}}
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$row->id}}">
                                                    <span data-feather="trash-2"></span>
                                                </button>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{route('client.delete')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$row->id}}">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Do you Want to delete this Client?</h6>
                                                                <p>Client won't be available!!</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="60">No Client Found</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

