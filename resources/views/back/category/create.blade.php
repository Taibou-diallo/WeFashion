@extends('layouts.master2')
@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Formulaire de creation et modification des categories') }}
            </h2>
            @if (isset($category))
                {{ __('Modification d\'une Catégorie') }}
            @else
                {{ __('Creation d\'une Categorie') }}
            @endif

        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        {{-- message de Validation --}}
                                        @if (session()->has('message'))
                                            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                                role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        @if (isset($product))
                                            <form style="width:65%" method="POST"
                                                action="{{ route('category.update', $category) }}">
                                                @method('PUT')
                                            @else
                                                <form style="width:65%" method="POST"
                                                    action="{{ route('category.store') }}">
                                        @endif
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nom de la categorie</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name', $category->name ?? '') }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="background-color:blue">
                                            {{ isset($category) ? 'Modifier' : 'Enregistrer' }}
                                        </button>
                                        {{-- </form> --}}
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
