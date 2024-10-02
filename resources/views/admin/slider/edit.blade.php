@extends('admin.main')

@section('content')
    <div class="card card-primary card-outline mb-4 mt-4">
        @include('admin.alert')
        <div class="card-header">
            <div class="card-title">Bảng Sửa Slider</div>
        </div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="mb-3">
                    <label for="menu" class="form-label">Tiễu Đề</label>
                    <input type="text" name="name" value="{{ $slider->name }}" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="menu" class="form-label">Đường Dẫn </label>
                    <input type="text" name="url" value="{{ $slider->url }}" class="form-control" >
                </div>

                <div class="form-group" style="padding-bottom: 15px;" >
                    <label for="menu">Ảnh Sản Phẩm</label>
                    <input type="file" name="file" class="form-control" id="upload">
                    <div id="image_show" style="padding-top: 10px" >
                        <a href="{{ $slider->thumb }}" target="_blank">
                            <img src="{{ $slider->thumb }}" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb"  value="{{ $slider->thumb }} "  id="thumb">
                </div>

                <div class="form-group">
                    <label for="menu">Sắp xếp</label>
                    <input type="number" name="sort_by" value="{{ $slider->sort_by }}"  class="form-control" >
                </div>

                <fieldset class="row mb-3" style="padding-top: 25px;">
                    <legend class="col-form-label col-sm-2 pt-0">Kích Hoạt</legend>
                    <div class="col-sm-10 d-flex">
                        <div class="form-check pe-4">
                            <input class="form-check-input" type="radio" name="active" id="active" value="1" {{ $slider->active == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="active">Có</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="no_active" value="0" {{ $slider->active == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="no_active">Không</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Cập Nhập Slider</button> </div>
            @csrf
        </form>
    </div>
@endsection

