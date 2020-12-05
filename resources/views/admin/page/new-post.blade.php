@extends('admin.base')

@section('css')
<link rel="stylesheet" href="{{asset('admin/css/slim.min.css')}}">
<style>
    .table tbody tr td {
        vertical-align: middle;
    }

    .ck-editor__editable_inline {
        min-height: 200px;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="d-flex  mb-3 ">
            <h1 class="h3 mr-3">
                Tambah Artikel
            </h1>
        </div>
        <form action="{{route('admin.create-post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="card h-100 mb-0">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="title">Judul Artikel</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" 
                                                type="text" 
                                                name="title"
                                                placeholder="Masukkan Judul Artikel" 
                                                autocomplete="title"
                                                value="{{ old('title') }}"
                                        >
                                        @error('title')
                                            <div class="invalid-feedback text-right">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-md-12 col-form-label" for="content">
                                        Content Artikel
                                    </label>
                                    <div class="col-md-12">
                                        <textarea name="content" id="content">{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback text-right d-block">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="published">
                                        Status
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control @error('published') is-invalid @enderror" id="select1" name="published">
                                            <option disabled>Status Artikel</option>
                                            <option value="1" selected>Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                        @error('published')
                                            <div class="invalid-feedback text-right">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-md-12 col-form-label" for="published">
                                        Featured Image
                                    </label>
                                    <div class="col-md-12">
                                        <div 
                                            class="slim" 
                                            data-ratio="3:2"
                                            data-force-size="1024,600" 
                                            data-label="Upload featured image"
                                            data-max-file-size="3"
                                        >
                                            <input type="file" name="image" />
                                        </div>
                                        @error('image')
                                            <div class="invalid-feedback d-block text-right">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success float-right" type="submit">
                                Tambah Artikel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('javascript')

<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}" defer></script>
<script src="{{ asset('admin/js/slim.kickstart.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'), {
            heading: {
                options: [{
                        model: 'paragraph',
                        view: 'p',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading Large (H2)',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading Small (H3)',
                        class: 'ck-heading_heading2'
                    },
                ]
            },

        })
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
