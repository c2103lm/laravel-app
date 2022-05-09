@foreach($data as $ps)
<div class="grid1_of_3">
    <a href="{{ route('home.product', ['product' => $ps->id, 'slug' => Str::slug($ps->name)]) }}">
        <img src="{{url('public/uploads')}}/{{$ps->image}}" alt="{{$ps->name}}" />
        <h3>{{$ps->name}}</h3>
        <div class="price">
            <h4>{{$ps->price}}<span>đ</span></h4>
        </div>
        <span class="b_btm"></span>
    </a>
</div>
@endforeach