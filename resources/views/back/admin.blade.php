 @extends('layouts.master2')

 @section('content')
     <x-app-layout>

         <x-slot name="header">
             <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 {{ __('Edouard') }}
             </h2>
             <a href="{{ route('acceuil') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                 <div class="d-flex justify-content-end">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-house-fill" viewBox="0 0 16 16">
                         <path fill-rule="evenodd"
                             d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                         <path fill-rule="evenodd"
                             d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                     </svg>
                 </div>
             </a>
         </x-slot>
     @section('content')
         <div class=" d-flex justify-content-between  mb-2 mt-4">
             {{-- pagination --}}
             {{ $products->links() }}
             <div> <a href="{{ route('create') }}" class="btn btn-primary">Nouveau</a></div>
         </div>
         <table class="table table-bordered table-hover ">
             <thead>
                 <tr>
                     <th scope="col">Name</th>
                     <th scope="col">Category</th>
                     <th scope="col">Price</th>
                     <th scope="col">State</th>
                     <th scope="col">Editer</th>
                     <th scope="col">Delete</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($products as $product)
                     <tr>
                         <td>{{ $product->name }}</td>
                         <td> {{ $product->category->name }}</td>
                         <td>{{ $product->price . '€' }}</td>
                         <td>{{ $product->state }}</td>
                         <td><a href="#" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                                     width="16" height="16" fill="currentColor" class="bi bi-pen-fill"
                                     viewBox="0 0 16 16">
                                     <path
                                         d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                 </svg></a></td>
                         {{-- <td> <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                     width="16" height="16" fill="currentColor" class="bi bi-trash3-fill"
                                     viewBox="0 0 16 16">
                                     <path
                                         d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                 </svg></a></td> --}}
                         <td>
                             <form style="width:65%" method="POST" action="{{ route('product.destroy', $product) }}">
                                 @method('DELETE')
                                 @csrf
                                 <button type="submit" class="btn btn-danger" style="background-color:red;"
                                     onclick="return confirm('Voulez vous supprimer ce produit ??')">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                         <path
                                             d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                     </svg>
                                 </button>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </x-app-layout>
 @endsection
