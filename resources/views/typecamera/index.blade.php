@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Gestion des types de caméra')
        @endslot
        <table class="table table-dark text-white">
            <tbody>
            @foreach($typecamera as $thetypecamera)
                <tr>
                    <td>{{ $thetypecamera->name }}</td>
                    <td>
                        <a type="button" href="{{ route('typecamera.destroy', $thetypecamera->id) }}"
                           class="btn btn-danger btn-sm pull-right invisible" data-toggle="tooltip"
                           title="@lang('Supprimer le type de caméra') {{ $thetypecamera->name }}"><i
                                    class="fas fa-trash fa-lg"></i></a>
                        <a type="button" href="{{ route('typecamera.edit', $thetypecamera->id) }}"
                           class="btn btn-warning btn-sm pull-right mr-2 invisible" data-toggle="tooltip"
                           title="@lang('Modifier le type de camera') {{ $thetypecamera->name }}"><i
                                    class="fas fa-edit fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endcomponent
@endsection
@section('script')
    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>
    @include('partials.script-delete', ['text' => __('Vraiment supprimer ce type de caméra ?'), 'return' => 'removeTr'])
@endsection