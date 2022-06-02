@extends('master')
@section('content')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('updateusers') }}">
            @csrf
            <input type="hidden" name="user_id"  value="{{$userid->id}}">
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$userid->name}}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$userid->email}}" required />
            </div>

            <div>
                <x-jet-label for="birthday" value="{{ __('Birthday') }}" />
                <x-jet-input id="birthday" class="block mt-1 w-full" type="text" name="birthday" value="{{$userid->birthday}}" required autofocus autocomplete="birthday" />
            </div>

            <div>
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{$userid->city}}" required autofocus autocomplete="city" />
            </div>

            <div>
                <x-jet-label for="country" value="{{ __('Country') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" value="{{$userid->country}}" required autofocus autocomplete="country" />
            </div>

            {{-- <div class="input-group mb-3"> --}}

                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="status"
                    id="active"
                    value="{{$userid->status}}"
                    checked
                  />
                  <label class="form-check-label" for="femaleGender">Active</label>
                </div>
    
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="status"
                    id="inactive"
                    value="{{$userid->status}}"
                  />
                  <label class="form-check-label" for="maleGender">Inactive</label>
                </div>
            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Update') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection


