@extends('layouts.app')

@section('titulo')
    Registrate en WorkStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
        <div class="md:w-6/12">
            <img src="{{ asset('img/registrar.jpg')}}" alt="Imagén Registro de Usuarios">
        </div>
        <div class="md:w-4/12 ">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombre</label>
                    <input 
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="Tu Nombre"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Username</label>
                    <input 
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" 
                        type="text" 
                        name="username" 
                        id="username" 
                        placeholder="Tu Nombre de Usuario"
                        value="{{ old('username') }}"
                    />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">Email</label>
                    <input 
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" 
                        type="email" 
                        name="email" 
                        id="email" 
                        placeholder="Tu Email de Registro"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Password</label>
                    <input 
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Password"
                    />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">Confirmar Password</label>
                    <input 
                        class="border p-3 w-full rounded-lg" 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        placeholder="Confirmar Password"
                    />
                </div>
                <input 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" 
                    type="submit" 
                    value="Crear Cuenta"
                />
            </form>
        </div>
        
    </div>
@endsection