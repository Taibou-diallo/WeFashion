@extends('layouts.master')

@section('contenu')
    {{-- affichage detail d'un produit --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm mt-4">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="col p-4 d-flex flex-column position-static">
                    <img class="pic-1" width="300" src="{{ asset('images/' . $product->picture->link) }}"
                        alt="{{ $product->picture->name }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{ $product->name }}</strong>
                    <div class="mb-1 text-muted">
                        <span style="color:blue;">Description :</span> {{ $product->description }}
                    </div>
                    <div class="mb-1 text-muted">
                        <span style="color:blue;">Prix :</span> {{ $product->price . '€' }}
                    </div>
                    <div class="mb-1 text-muted">
                        <span style="color:blue;">Visibilité : </span>{{ $product->visibility }}
                    </div>
                    <div class="mb-1 text-muted">
                        <span style="color:blue;">Etat : </span>{{ $product->state }}
                    </div>
                    <div class="mb-1 text-muted">
                        <span style="color:blue;">Reference : </span>{{ $product->reference }}
                    </div>
                    <div class="mb-1 text-muted">
                        <span style="color:blue;">Categorie :</span> {{ $product->category->name }}
                    </div>
                </div>
                <select name="" class="form-contrler">
                    <option value=""> Veuillez choisir votre taille</option>
                    @foreach ($product->sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach
                </select>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success">acheter</button>
                </div>
            </div>

        </div>
    </div>
@endsection
