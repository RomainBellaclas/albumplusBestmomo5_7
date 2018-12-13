@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Modifier un type de caméra')
        @endslot
        <form method="POST" action="{{ route('typecamera.update', $typecamera->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $typecamera->name,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Description'),
                'type' => 'text',
                'name' => 'libellé',
                'value' => $typecamera->libellé,
                'required' => false,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection