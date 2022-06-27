@extends('layouts.master2')

@section('content')
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Formulaire de modification des produits des produits') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        <form style="width:65%" method="POST" action="{{ route('product.update') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nom</label>
                                                <input type="text" class="form-control"name="name"
                                                    value="{{ old('name') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <input type="text" class="form-control" name="description"
                                                    value="{{ old('description') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Prix</label>
                                                <input type="text" class="form-control" name="price"
                                                    value="{{ old('price') }}">
                                            </div>
                                            <div class="mb-3">
                                                <p>Visibilité :</p>
                                                <label class="form-label">publié</label>
                                                <input type="radio" name="visibility" value="publish"
                                                    {{ old('visibility') == 'publish' ? 'checked' : '' }}>

                                                <label class="form-label">Non publié</label>
                                                <input type="radio" name="visibility" value="no publish"
                                                    {{ old('no publish') == 'no publish' ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="prenom" class="form-label">Reference</label>
                                                <input type="text" class="form-control" name="reference"
                                                    value="{{ old('reference') }}">
                                            </div>
                                            <div class="mb-3">
                                                <p>Etat :</p>
                                                <label class="form-label">Sale</label>
                                                <input type="radio" name="state" value="sale"
                                                    {{ old('sate') == 'sale' ? 'checked' : '' }}>

                                                <label class="form-label">Standard</label>
                                                <input type="radio" name="state" value="standard"
                                                    {{ old('no publish') == ' standard' ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="category"
                                                    class="block font-medium text-gray-700">Categorie</label>
                                                <select id="category" name="category_id"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Choissir une categorie :</option>


                                                    @foreach ($Productcategories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $category->id == old('genre_id', $product->category_id) ? 'selected' : '' }}>
                                                            {{ $category->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label>choisir les tailles du produit :</label><br>
                                                @foreach ($sizes as $size)
                                                    <label><input type="checkbox" name="sizes[]"
                                                            value="{{ $size->id }}"
                                                            {{ in_array($size->id, old('sizes', $checkSises)) ? 'checked' : '' }}>{{ $size->name }}</label><br>
                                                @endforeach
                                            </div>

                                            <label for="title" class="block font-medium text-gray-700">
                                                Titre de l'image :
                                            </label>
                                            <input class="form-control" type="text" name="title_image"
                                                value="{{ old('title_image') }}"><br>
                                            <input class="form-control" type="file" name="picture"><br>

                                            <div class="mb-3">
                                                @if (isset($product->picture))
                                                    <img width="300"
                                                        src="{{ url('images', $product->picture->link) }}"
                                                        alt="">
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-primary"
                                                style="background-color:blue">Modifier
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
