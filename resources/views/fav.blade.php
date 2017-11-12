@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Wishlist</div>

                <div class="panel-body">
                    @if($products->count())
                        @foreach($products as $product)
                        <article>
                            <h4><a href="{{ route('product.show', $product) }}">{{ $product->title }}</a></h4>
                            <br>
                            <span class="pull-left">Added {{ $product->pivot->created_at->diffforHumans() }}</span>

                            <span class="pull-right">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('product-fav-destroy-{{ $product->id }}').submit();">Remove from Favourites</a>
                            </span>

                            <form action="{{ route('product.fav.destroy', $product) }}" method="POST" id="product-fav-destroy-{{ $product->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        </article>

                        <hr>
                    @endforeach
                    @else
                        No favourite items found :(
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
