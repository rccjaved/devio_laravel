@extends('admin.admin_master')
@section('admin')

<div class="content-body">
    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Home Content</h4>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Home Title</th>
                                    <th>SubTitle</th>
                                    <th>Button</th>
                                    <th>Projects</th>
                                    <th>Countries</th>
                                    <th>Workers</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                @foreach ($homecontent as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->home_title }}</td>
                                    <td>{{ $item->home_subtitle }}</td>
                                    <td>{{ $item->button_text }}</td>
                                    <td>{{ $item->total_projects }}</td>
                                    <td>{{ $item->total_countries }}</td>
                                    <td>{{ $item->total_workers	 }}</td>


                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('edit.homecontent', $item->id) }}">
                                                    <i data-feather="edit-2" class="me-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" id="delete" href="{{ route('delete.homecontent', $item->id) }}">
                                                    <i data-feather="trash" class="me-50"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Responsive Datatable -->


</div>


@endsection