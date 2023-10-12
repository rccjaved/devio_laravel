@extends('admin.admin_master')

@section('title','Edit Home Content')
@section('description','DevioTech Home Content Section')
@section('keywords','DevioTech')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <form class="form" action="{{ route('homecontent.update', $edithomecontent->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Home Title</label>
                                    <input type="text" id="first-name-column" class="form-control" value="{{ $edithomecontent->home_title }}" name="home_title" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Home SubTitle</label>
                                    <textarea class="tinymce-editor" name="home_subtitle">{{ $edithomecontent->home_subtitle }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Button Text</label>
                                    <input type="text" id="city-column" class="form-control" value="{{ $edithomecontent->button_text }}" name="button_text" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Button Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="button_url" value="{{ $edithomecontent->button_url }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Video Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="video_url" value="{{ $edithomecontent->video_url }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">Total Projects</label>
                                    <input type="text" id="company-column" class="form-control" name="total_projects" value="{{ $edithomecontent->total_projects }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Total Countries</label>
                                    <input type="text" id="email-id-column" class="form-control" name="total_countries" value="{{ $edithomecontent->total_countries }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Total Workers</label>
                                    <input type="text" id="email-id-column" class="form-control" name="total_workers" value="{{ $edithomecontent->total_workers }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Window Users</label>
                                    <input type="text" id="email-id-column" class="form-control" name="total_window_users" value="{{ $edithomecontent->total_window_users }}" />
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">LinkedIn Url</label>
                                    <input type="text" id="email-id-column" class="form-control" name="linkedin_url" value="{{ $edithomecontent->linkedin_url }}" />
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">FaceBook Url</label>
                                    <input type="text" id="email-id-column" class="form-control" name="facebook_url" value="{{ $edithomecontent->facebook_url }}" />
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">WhatsApp No</label>
                                    <input type="text" id="email-id-column" class="form-control" name="whatsapp_no" value="{{ $edithomecontent->whatsapp_no }}" />
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-column">Instagram Url</label>
                                    <input type="text" id="email-id-column" class="form-control" name="instagram_url" value="{{ $edithomecontent->instagram_url }}" />
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
    <script src="https://cdn.tiny.cloud/1/oplnldrp940ph7o2kk9ihstewjsqifujn7umusn9ruszucdh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
    <script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection