@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Account</h2>
                
            </div>
        </div>
    </div>
    
</div>
<div class="content-body">
    <div class="row">
        <div class="col-12">
            <!-- profile -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Profile Details</h4>
                </div>
                <div class="card-body py-2 my-25">
                     <!-- form -->
                    <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data" class="validate-form mt-2 pt-50">
                        @csrf
                         <!-- header section -->
                        <div class="d-flex">
                            <a class="me-25">
                                <img id="showImage" src="{{ (!empty($user->profile_photo_path))?url('uploads/user_images/'.$user->profile_photo_path):url('uploads/no_image.jpg') }}" style="width: 100px; height: 100px;">
                            </a>
                            <!-- upload and reset button -->
                            <div class="d-flex align-items-end mt-75 ms-1">
                                <div>
                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                    <input type="file" name="profile_photo_path" id="account-upload" hidden accept="image/*" />
                                    <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                    <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                </div>
                            </div>
                            <!--/ upload and reset button -->
                        </div>
                        <!--/ header section -->

                   
                        <div class="row">
                            <div class="col-12 col-sm-4 mb-1">
                                <label class="form-label" for="accountFirstName">Name</label>
                                <input type="text" class="form-control" id="accountFirstName" name="name" placeholder="John" value="{{ $user->name }}" data-msg="Please enter first name" />
                            </div>
                            
                            <div class="col-12 col-sm-4 mb-1">
                                <label class="form-label" for="accountEmail">Email</label>
                                <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="{{ $user->email }}" />
                            </div>
                            <div class="col-12 col-sm-4 mb-1">
                                <label class="form-label" for="accountEmail">Password</label>
                                <input type="password" class="form-control" id="accountEmail" name="password" placeholder="Email" value="johndoe@gmail.com" disabled/>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary mt-1">Reset</button>
                            </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
            </div>

           
            <!--/ profile -->
        </div>
    </div>

</div>


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