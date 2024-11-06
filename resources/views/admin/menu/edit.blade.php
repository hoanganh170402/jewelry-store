@extends('admin.main')

@section('head')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.css">
@endsection
@section('content')
    <div class="card card-primary card-outline mb-4 mt-4">
        @include('admin.alert')
        <div class="card-header">
            <div class="card-title">Bảng Tạo Danh Mục</div>
        </div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="mb-3">
                    <label for="menu" class="form-label">Tên Danh Mục</label>
                    <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Nhập Danh Mục">
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh Mục</label>
                    <select name="parent_id" class="form-control">
                        <option value="0" {{ $menu->parent_id == 0 ? 'selected' : '' }}>Các Danh Mục </option>
                        @foreach ($menus as $menuParent)
                            <option value="{{ $menuParent->id }}" {{ $menu->parent_id == $menuParent->id ? 'selected' : '' }}> {{$menuParent->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô Tả</label>
                    <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content" class="form-control"> {{$menu->content }}</textarea>
                </div>

                <div class="form-group" style="padding-bottom: 25px;">
                    <label for="menu">Ảnh Danh Mục</label>
                    <input type="file" name="file" class="form-control" id="upload">
                    <div id="image_show" style="padding-top: 10px;">
                        <a href="{{$menu->thumb}}" target="_blank">
                            <img src="{{$menu->thumb}}" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb" value="{{$menu->thumb}}" id="thumb">
                </div>

                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Kích Hoạt</legend>
                    <div class="col-sm-10 d-flex">
                        <div class="form-check pe-4">
                            <input class="form-check-input" type="radio" name="active" id="active" value="1" {{$menu->active = 1 ? 'checked=""' : ''}}>
                            <label class="form-check-label" for="active">Có</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="no_active" value="0" {{$menu->active = 0 ? 'checked=""' : ''}}>
                            <label class="form-check-label" for="no_active">Không</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Cập Nhập Danh Mục</button> </div>
            @csrf
        </form>
    </div>
@endsection

@section('footer')
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
            }
        }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';

        ClassicEditor
            .create( document.querySelector( '#content' ), {
                plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- A friendly reminder to run on a server, remove this during the integration. -->
    <script>
        window.onload = function() {
            if ( window.location.protocol === "file:" ) {
                alert( "This sample requires an HTTP server. Please serve this file with a web server." );
            }
        };
    </script>
@endsection
