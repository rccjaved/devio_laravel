@extends('admin.admin_master')

@section('title','Blogs Content')
@section('description','DevioTech Blogs Content Section')
@section('keywords','DevioTech, Blogs')

@section('css')
@endsection

@section('admin')

 <!-- Basic multiple Column Form section start -->
 <section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Blogs</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('admin.blog.update', $editData->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Blog Name</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Type Name" name="blog_name" value = "{{ $editData->blog_name }}"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Slug</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Type Slug" name="slug" value = "{{ $editData->slug }}"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">FaceBook Url</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Type URL" name="facebook_url" value = "{{ $editData->facebook_url }}"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Twitter Url</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Type URL" name="twitter_url" value = "{{ $editData->twitter_url }}"/>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">LinkedIn</label>
                                    <input type="text" id="country-floating" class="form-control" name="linkedin_url" placeholder="Type URL" value = "{{ $editData->linkedin_url }}"/>
                                </div>
                            </div>        

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage" src="{{ asset($editData->blog_image) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="blog_image" id="account-upload" hidden accept="image/*" />
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Description</label>
                                    <textarea name="blog_description" class="form-control" cols="30" rows="5">{{ $editData->blog_description }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success me-1">Update </button>
                       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Floating Label Form section end -->

@endsection

@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#account-upload').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });   
    </script>

@endsection

