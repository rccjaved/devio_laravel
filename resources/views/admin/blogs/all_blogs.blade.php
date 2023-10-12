@extends('admin.admin_master')

@section('title','Blogs Content')
@section('description','DevioTech Blogs Content Section')
@section('keywords','DevioTech, Blogs')

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
                        <h4 class="card-title">All Blogs</h4>
                        <a href="{{ route('admin.blog.add') }}" class="dt-button create-new btn btn-primary"> Add New</a>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Blog Name</th>
                                    <th>Slug</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->blog_name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->blog_author }}</td>
                                    <td>{{ $item->blog_description }}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('admin.blog.edit', $item->id) }}">
                                                    <i data-feather="edit-2" class="me-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" id="delete" href="{{ route('admin.blog.delete', $item->id) }}">
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

@section('js')
@endsection