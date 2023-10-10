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
                    <form class="form" action="{{ route('update.project.service', $editData->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Portfolio Title</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Type Title" value="{{ $editData->portfolio_title }}" name="portfolio_title" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">SubTitle</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Type SubTitle" name="portfolio_subtitle" value="{{ $editData->portfolio_subtitle }}"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Button</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Type Text" name="button_text" value="{{ $editData->button_text }}"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Button Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="button_url" value="{{ $editData->button_url }}" placeholder="Type URL" />
                                </div>
                            </div>


                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Image One Url</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Type Image URL" value="{{ $editData->image1_url }}" name="image1_url" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Image Two Url</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Type Image URL" name="image2_url" value="{{ $editData->image2_url }}"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Image Three Url</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Type Image URL" name="image3_url" value="{{ $editData->image3_url }}"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Image Four Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="image4_url" value="{{ $editData->image4_url }}" placeholder="Type Image URL" />
                                </div>
                            </div>


                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Image Five Url</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Type Image URL" value="{{ $editData->image5_url }}" name="image5_url" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Image Six Url</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Type Image URL" name="image6_url" value="{{ $editData->image6_url }}"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Image Seven Url</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Type Image URL" name="image7_url" value="{{ $editData->image7_url }}"/>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Image Eight Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="image8_url" value="{{ $editData->image8_url }}" placeholder="Type Image URL" />
                                </div>
                            </div>

                            
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage" src="{{ asset($editData->image1)  }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image1" id="account-upload" hidden accept="image/*" />
                                                <p class="mb-0">Image One</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage1" src="{{ asset($editData->image2)  }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-1" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image2" id="account-upload-1" hidden accept="image/*" />
                                                <p class="mb-0">Image Two</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage2" src="{{ asset($editData->image3) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-2" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image3" id="account-upload-2" hidden accept="image/*" />
                                                <p class="mb-0">Image Three</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage3" src="{{ asset($editData->image4) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-3" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image4" id="account-upload-3" hidden accept="image/*" />
                                                <p class="mb-0">Image Four</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage4" src="{{ asset($editData->image5) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-4" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image5" id="account-upload-4" hidden accept="image/*" />
                                                <p class="mb-0">Image Five</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage5" src="{{ asset($editData->image6) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-5" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image6" id="account-upload-5" hidden accept="image/*" />
                                                <p class="mb-0">Image Six</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage6" src="{{ asset($editData->image7) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-6" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image7" id="account-upload-6" hidden accept="image/*" />
                                                <p class="mb-0">Image Seven</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage7" src="{{ asset($editData->image8) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload-7" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image8" id="account-upload-7" hidden accept="image/*" />
                                                <p class="mb-0">Image Eight</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Description</label>
                                    <textarea name="description" id="country-floating" class="form-control" cols="30" rows="5">{{ $editData->description }}</textarea>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-2').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage2').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-3').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage3').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-4').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage4').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-5').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage5').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-6').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage6').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#account-upload-7').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage7').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });   
</script>


@endsection