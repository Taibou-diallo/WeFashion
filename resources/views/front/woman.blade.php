@extends('layouts.master')

@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm mt-4">
        <h3 class="border-bottom pb-2 mt-4">liste des produits</h3>
        <a class="border-bottom pb-2 mt-4   d-flex justify-content-end" href="">resultats</a>
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="product-grid9">
                        <div class="product-image9">
                            <a href="{{ route('product', $product->id) }}">
                                <img class="pic-1" width="250" src="{{ asset('images/' . $product->picture->link) }}"
                                    alt="{{ $product->picture->name }}">
                        </div>
                        <div class="product-content ">
                            </a>
                            <h6 class="title">
                                <a href="{{ url('fashion', $product->category_id) }}">{{ $product->name }}</a>
                            </h6>
                            <div class="price"> {{ $product->price . '€' }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class=" d-flex justify-content-end ">
            {{ $products->links() }}
        </div>
    </div>
@endsection
