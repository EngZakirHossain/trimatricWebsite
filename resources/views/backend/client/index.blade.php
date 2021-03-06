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

                                            <td class="text-right">
                                                <a href="#" class="btn btn-sm btn-white text-danger sweet_delete mr-2">
                                                    <i class="far fa-trash-alt mr-1"></i>
                                                    Delete
                                                </a>
                                            </td>
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
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.sweet_delete').click(function(){


                var delete_id = $(this).closest("tr").find('.Delete_val_id').val();
                // alert(delete_id);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var data = {
                            "_token": $('input[name=_token]').val(),
                            "id": delete_id,
                        };
                        $.ajax({
                            type:"POST",
                            url:"{{route('client.delete')}}",
                            data: data,
                            success: function (response){
                                Swal.fire(
                                    'Deleted!',
                                    'Client deleted.',
                                    'success'
                                )
                                    .then((result) =>{
                                        location.reload();
                                    });
                            }
                        });



                    }
                })
            });
        } );
    </script>

@endsection
