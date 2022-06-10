@foreach($data as $ps)
<div class="grid1_of_3">
    <a href="{{ route('home.product', ['product' => $ps->id, 'slug' => Str::slug($ps->name)]) }}">
        <img src="{{url('public/uploads')}}/{{$ps->image}}" alt="{{$ps->name}}" />
        <h3>{{$ps->name}}</h3>
        <div class="price">
            <h4>{{$ps->price}} </h4>
            <div class="form-inline">
                <a href="{{ route('cart.add', $ps->id) }}" class="add-cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                @if (auth()->guard('customer')->check())
                    @if (auth()->guard('customer')->user()->isFavorited($ps->id))
                        <a href="{{ route('home.unfavorite', $ps->id) }}"><i class="glyphicon glyphicon-heart-empty" style="color: red"></i></a>
                    @else
                        <a href="{{ route('home.favorite', $ps->id) }}"><i class="glyphicon glyphicon-heart-empty"></i></a>
                    @endif
                @else
                    <a href="{{ route('home.login') }}"><i class="glyphicon glyphicon-heart-empty"></i></a>
                @endif
            </div>
        </div>
        <span class="b_btm"></span>
    </a>
</div>
@endforeach