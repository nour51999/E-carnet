@extends('liste')
@section('content')

<h3 style="color:#976cd8; text-align:center;" >Ajouter Utilisateur</h3>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div style=" padding: 20px; background-color: #C493FF; " class="c cent">
        <form method="POST" action="{{ route('register') }}" class="form3 " >
            @csrf

            <!-- Name -->
            <div class="form-group">
                <x-label for="name" :value="__('Nom/Prenom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  required autofocus class="form-control" />
            </div>



            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  class="form-control"/>
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"  class="form-control"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required class="form-control" />
            </div>

            <!--Select Option Rol type -->
            <div class="form-group">
                <x-label for="role_id" value="{{ __('Role est:') }}"/>
                <select name="role_id"  class="form-control">
                    <option value="enseignant">Enseignant</option>
           
                    <option value="parent">Parent</option>
                </select>
            </div>
            

            <div class="form-group>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déja enregistré?') }}
                </a>

                <input type="submit"  class="form-control btn2" value="    {{ __('Register') }}"  />
                
            </div>
        </form>
        </div>
  
@endsection