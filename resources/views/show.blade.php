@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{ $product->title }}

                    @if(!$product->favouritedBy(Auth::user()))
                        <span class="pull-right">
                            <a href="#" onclick="event.preventDefault(); document.getElementById('product-fav-form').submit();">Add to Favourites</a>

                            <form id="product-fav-form" class="hidden" action="{{ route('product.fav.store', $product) }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </span>
                    @endif
                </div>

                <div class="panel-body">
                    {{ $product->description }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
