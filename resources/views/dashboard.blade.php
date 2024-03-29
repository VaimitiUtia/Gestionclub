@extends("layouts.master")
@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="p-6 bg-white border-b border-gray-200">
            You're logged in! :
            <a href="{{ route('users') }}" class="inline-flex items-center px-6 py4 border border-gray-400 shadow-sm text-base font-medium rounded-md textgray-700 bg-white">
                Gestion des utilisateurs
            </a>
        </div>
    </x-app-layout>
@endsection
