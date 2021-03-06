@extends('layouts.master')

@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm mt-4">
        <div class=" d-flex justify-content-between  mb-2 mt-4">
            <h3 class="border-bottom pb-2">Tous les produits</h3>
            {{ $products->links() }}
        </div>
        <a class="border-bottom pb-2 mt-4   d-flex justify-content-end" href=""> {{ $products->total() }}
            resultas</a>
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="product-grid9">
                        <div class="product-image9">
                            <a href="{{ route('product', $product->id) }}">
                                {{-- <img class="pic-1" width="250" src="{{ asset('images' . $product->picture->link) }}"
                                    alt="{{ $product->picture->name }}"> --}}
                            </a>
                        </div>
                        <div class="product-content ">

                            <h6 class="title"><a href="{{ url('fashion', $product->id) }}">{{ $product->name }}</a>
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
