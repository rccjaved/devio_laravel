@extends('admin.admin_master')

@section('title','Edit Contact Content')
@section('description','DevioTech Contact Content Section')
@section('keywords','DevioTech, Contact')

@section('css')
@endsection

@section('admin')

 <!-- Basic multiple Column Form section start -->
 <section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Home</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('update.content.contact', $editData->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Address</label>
                                    <input type="text" id="first-name-column" class="form-control" value="{{ $editData->address }}" name="address" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Email</label>
                                    <input type="email" id="last-name-column" class="form-control" value="{{ $editData->email }}" name="email" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">phone</label>
                                    <input type="text" id="city-column" class="form-control" value="{{ $editData->phone }}" name="phone" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">FaceBook</label>
                                    <input type="text" id="country-floating" class="form-control" name="facebook" value="{{ $editData->facebook }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Instagram</label>
                                    <input type="text" id="country-floating" class="form-control" name="instagram" value="{{ $editData->instagram }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">twitter</label>
                                    <input type="text" id="company-column" class="form-control" name="twitter" value="{{ $editData->twitter }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">LinkedIn</label>
                                    <input type="text" id="email-id-column" class="form-control" name="linkedin" value="{{ $editData->linkedin }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Footer Text</label>
                                    <input type="text" id="email-id-column" class="form-control" name="footer_text" value="{{ $editData->footer_text }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Footer Credit</label>
                                    <input type="text" id="email-id-column" class="form-control" name="footer_credit" value="{{ $editData->footer_credit }}" />
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <div class="d-flex">
                                        <a class="me-25">
                                            <img id="showImage" src="{{ asset($editData->footer_logo) }}" style="width: 100px; height: 100px;">
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" name="footer_logo" id="account-upload" hidden accept="image/*" />
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-success me-1">Update</button>
                       
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