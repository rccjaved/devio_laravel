@extends('admin.admin_master')

@section('title','Edit About Content')
@section('description','DevioTech About Content Section')
@section('keywords','DevioTech, About')

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
                    <form class="form" action="{{ route('about.content.update', $editaboutcontent->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">About Title</label>
                                    <input type="text" id="first-name-column" class="form-control" value="{{ $editaboutcontent->about_title }}" name="about_title" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">About SubTitle</label>
                                    <input type="text" id="last-name-column" class="form-control" value="{{ $editaboutcontent->about_subtitle }}" name="about_subtitle" />
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">About Image Url</label>
                                    <input type="text" id="company-column" class="form-control" name="about_image" value="{{ $editaboutcontent->about_image }}" />
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="city-column">Button Text</label>
                                    <input type="text" id="city-column" class="form-control" value="{{ $editaboutcontent->button_text }}" name="button_text" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Button Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="button_url" value="{{ $editaboutcontent->button_url }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="country-floating">Video Url</label>
                                    <input type="text" id="country-floating" class="form-control" name="video_url" value="{{ $editaboutcontent->video_url }}" />
                                </div>
                            </div>
                            

                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">About Image Heading</label>
                                    <input type="text" id="company-column" class="form-control" name="image_heading" value="{{ $editaboutcontent->image_heading }}" />
                                    {{-- <textarea name="image_heading" id="company-column" class="form-control" cols="30" rows="10">{{ $editaboutcontent->image_heading }}</textarea> --}}
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">Description</label>
                                    <textarea name="description" id="company-column" class="form-control tinymce-editor" cols="30" rows="10">{{ $editaboutcontent->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-4 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">Sub Description</label>
                                    <textarea name="bold_description" id="company-column" class="form-control tinymce-editor" cols="30" rows="10">{{ $editaboutcontent->bold_description }}</textarea>
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