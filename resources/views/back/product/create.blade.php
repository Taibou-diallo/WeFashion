@extends('layouts.master2')

@section('content')
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Formulaire de création des produits') }}
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
                                        <form style="width:65%" method="POST" action="{{ route('product.store') }}">
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
                                                <p>Visibilité:</p>
                                                <label class="form-label">publié</label>
                                                <input type="radio" name="visibility" value="publish"
                                                    {{ old('visibility') == 'publish' ? 'checked' : '' }}>

                                                <label class="form-label">Non publié</label>
                                                <input type="radio" name="visibility" value="no publish"
                                                    {{ old('no publish') == ' no publish' ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="prenom" class="form-label">Reference</label>
                                                <input type="text" class="form-control" name="reference"
                                                    value="{{ old('reference') }}">
                                            </div>
                                            <div class="mb-3">
                                                <p>Etat:</p>
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
                                                    <option value="">Choissir une categorie</option>
                                                    @foreach ($category as $id => $name)
                                                        <option @selected(old('category_id', $product->category->id ?? '') == $id) value="{{ $id }}">
                                                            {{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="mb-3">
                                                @foreach ($sizes as $id => $size)
                                                    <label for="size{{ $size_id }}">{{ $size->name }}</label>
                                                    <input type="checkbox" name="sizes[]" value="{{ $size_id }}"
                                                        @checked (in_array($size_id, old('sizes', $Sizes ?? []))) id="size{{ $size_id }}">
                                                @endforeach
                                            </div> --}}




                                            Title de l'image : <input class="form-control" type="text" name="title_image"
                                                value="{{ old('title_image') }}"><br>
                                            <input class="form-control" type="file" name="picture"><br>
                                            <button type="submit" class="btn btn-primary" style="background-color:blue">
                                                {{ isset($category) ? 'Enregistrer' : 'Modifier' }}</button>
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
