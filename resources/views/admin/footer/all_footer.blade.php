@extends('admin.admin_master')

@section('title','Contact Content')
@section('description','DevioTech Contact Content Section')
@section('keywords','DevioTech, Contact')

@section('css')
@endsection

@section('admin')

<div class="content-body">
    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Footer Content</h4>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Footer Text</th>
                                    <th>Credit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($footer as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->footer_text }}</td>
                                    <td>{{ $item->footer_credit }}</td>


                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('edit.contact.content', $item->id) }}">
                                                    <i data-feather="edit-2" class="me-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" id="delete" href="{{ route('delete.contact.content', $item->id) }}">
                                                    <i data-feather="trash" class="me-50"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Responsive Datatable -->


</div>


@endsection