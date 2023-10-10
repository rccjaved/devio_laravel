@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Basic multiple Column Form section start -->
 <section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Services</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('store.service.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Service Name</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Type Title" name="service_name" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Service URL</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Type SubTitle" name="service_url" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Service Icon</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Type Text" name="icon" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Heading 1</label>
                                    <input type="text" id="country-floating" class="form-control" name="service_page_heading_one" placeholder="Type URL" />
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Heading 2</label>
                                    <input type="text" id="country-floating" class="form-control" name="service_page_heading_two" placeholder="Type URL" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Para1</label>
                                    <textarea name="" id="country-floating" cols="30" class="form-control" rows="5" name="service_page_para_one"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Para Two</label>
                                    <textarea name="" id="country-floating" cols="30" class="form-control" rows="5" name="service_page_para_two"></textarea>
                                </div>
                            </div>

                            

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage" src="{{ url('uploads/no_image.jpg') }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="service_page_image_one" id="account-upload" hidden accept="image/*" />
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage1" src="{{ url('uploads/no_image.jpg') }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-1" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="service_page_image_two" id="account-upload-1" hidden accept="image/*" />
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1">Save </button>
                       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Floating Label Form section end -->


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

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-1').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage1').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>

@endsection