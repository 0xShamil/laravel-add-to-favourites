@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Products
                    <span class="pull-right"><a href="{{ route('product.fav') }}">My Wishlist</a></span>
                </div>

                <div class="panel-body">
                    @foreach($products as $product)
                        <article>
                            <h4><a href="{{ route('product.show', $product) }}">{{ $product->title }}</a></h4>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
