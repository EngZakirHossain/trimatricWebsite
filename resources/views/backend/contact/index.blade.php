@extends('backend.layouts.master')
@section('title')
    News Letters
@endsection
@section('news')
    active
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">News Letter</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">News Letter</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                    <div class="card card-table">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="card-title text-white">List of News Letter</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-center table-hover datatable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($contacts as $key=>$row)

                                        <tr>
                                            <input class="Delete_val_id" type="hidden" name="id" value="{{ $row->id }}">
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{$row->message}}</td>
                                            <td class="text-right">
                                                        <a href="#" class="btn btn-sm btn-white text-danger sweet_delete mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="60">No Message Found</td>
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
                            url:"{{route('contact.delete')}}",
                            data: data,
                            success: function (response){
                                Swal.fire(
                                    'Deleted!',
                                    'Contact deleted.',
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
