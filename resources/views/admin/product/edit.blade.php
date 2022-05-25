@extends('master.admin')

@section('title','Thêm mới sản phẩm')

@section('main')

<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" value="{{ $product->name }}">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>

                <textarea name="desr" id="content" class="form-control" rows="3"
                    placeholder="Mô tả sản phẩm...">{{ $product->desr }}</textarea>

            </div>
            <div class="form-group">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Ảnh</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($product->images as $img)
                        <tr>
                            <td>{{$img->id}}</td>
                            <td><img src="{{url('public/uploads/'.$img->image_name)}}" alt="" width="60"></td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('product.delete_image', $img->id) }}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Danh mục</label>

                <select name="category_id" class="form-control">
                    <option value="">...</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}" {{$product->category_id == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                    @endforeach
                </select>

                @error('category_id')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm" value="{{ $product->price }}">
                @error('price')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Giá Km</label>
                <input type="text" class="form-control" name="sale_price" placeholder="Giá sản phẩm" value="{{ $product->sale_price }}">
                @error('sale_price')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" name="upload" id="upload"  accept="image/*"/>
                <img src="{{url('public/uploads/'.$product->image)}}" alt="" width="100%">
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Ảnh Khác </label>
                <input type="file" class="form-control" name="uploads[]" id="uploads" multiple accept="image/*"/>
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Trạng thái</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}} >
                        Hiển thị
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="0" {{$product->status== 0 ? 'checked' : ''}}>
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