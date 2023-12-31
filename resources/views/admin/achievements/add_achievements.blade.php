@extends('admin.admin_master')

@section('title','Add Achievements Content')
@section('description','DevioTech Achievements Content Section')
@section('keywords','DevioTech, Achievements')

@section('css')
@endsection

@section('admin')

 <!-- Basic multiple Column Form section start -->
 <section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Services</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('store.achieve.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage" src="{{ url('uploads/no_image.jpg') }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="image" id="account-upload" hidden accept="image/*" />
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Image url</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Type URL" name="image_url" />
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