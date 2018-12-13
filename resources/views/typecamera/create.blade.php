@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter un type de caméra')
        @endslot
        <form method="POST" action="{{ route('typecamera.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
                @include('partials.form-group', [
                'title' => __('Description'),
                'type' => 'text',
                'name' => 'libellé',
                'required' => false,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection