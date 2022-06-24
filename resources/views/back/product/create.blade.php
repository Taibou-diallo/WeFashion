@extends('layouts.master2')
@section('content')
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">


                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">

                                        @if (session()->has('success'))
                                            {{ session()->get('sucess') }}
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

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
                                                <label class="form-label">publie</label>
                                                <input type="radio" name="visibility" value="publish"
                                                    {{ old('visibility') == 'publish' ? 'checked' : '' }}>

                                                <label class="form-label">Non publie</label>
                                                <input type="radio" name="visibility" value="no publish"
                                                    {{ old('no publish') == ' no publish' ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Solde</label>
                                                <input type="radio" name="state" value="sale"
                                                    {{ old('sate') == 'sale' ? 'checked' : '' }}>

                                                <label class="form-label">Standard</label>
                                                <input type="radio" name="state" value="standard"
                                                    {{ old('no publish') == ' standard' ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="prenom" class="form-label">Reference</label>
                                                <input type="text" class="form-control" name="reference"
                                                    value="{{ old('reference') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Solde</label>
                                                <input type="radio" name="state" value="sale"
                                                    {{ old('sate') == 'sale' ? 'checked' : '' }}>

                                                <label class="form-label">Standard</label>
                                                <input type="radio" name="state" value="standard"
                                                    {{ old('no publish') == ' standard' ? 'checked' : '' }}>
                                                </label>
                                            </div>
                                            {{-- <div class="mb-3">
                                                @foreach ($sizes as $size)
                                                    <label><input type="checkbox" name="sizes[]"
                                                            value="{{ $size->name }}"
                                                            {{ in_array($size->name, old('sizes', [])) ? 'checked' : '' }}>
                                                        {{ $size->firstname }}
                                                        {{ $size->name }}</label><br>
                                                @endforeach
                                            </div> --}}

                                            Title de l'image : <input class="form-control" type="text" name="title_image"
                                                value="{{ old('title_image') }}"><br>
                                            <input class="form-control" type="file" name="picture"><br>

                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection
                </div>
            </div>
        </div>
    </div>
@endsection
</x-app-layout>
