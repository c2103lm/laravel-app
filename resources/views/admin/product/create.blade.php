@extends('master.admin')

@section('title','Thêm mới sản phẩm')

@section('main')

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" value="{{ old('name') }}">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>

                <textarea name="desr" id="content" class="form-control" rows="3"
                    placeholder="Mô tả sản phẩm...">{{ old('desr') }}</textarea>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Danh mục</label>

                <select name="category_id" class="form-control">
                    <option value="">...</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}" {{old('category_id') == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                    @endforeach
                </select>

                @error('category_id')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm" value="{{ old('price') }}">
                @error('price')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Giá Km</label>
                <input type="text" class="form-control" name="sale_price" placeholder="Giá sản phẩm" value="{{ old('sale_price') }}">
                @error('sale_price')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" name="upload" id="upload"  accept="image/*"/>
                <img src="" id="show_image" alt="" style="width:100%">
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Ảnh Khác </label>
                <input type="file" class="form-control" name="uploads[]" id="uploads" multiple accept="image/*"/>
                <img src="" id="show_images" alt="" style="width:30%">
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Trạng thái</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{old('status') == 1 ? 'checked' : ''}} >
                        Hiển thị
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{old('status') == 0 ? 'checked' : ''}}>
                        Tạm ẩn
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Thêm mới</button>
        </div>


    </div>

</form>


@stop()

@section('js')
<script>
$('#upload').change(function(ev) {
    var input = $(this)[0];
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            console.log(e)
            $('#show_image').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
})
</script>
@stop()