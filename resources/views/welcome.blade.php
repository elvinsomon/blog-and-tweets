@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mt-2 mb-4">Últimas Entradas</h1>
            @foreach ($entries as $entry)
            <div class="card mb-4">
                <div class="card-header">
                    {{$entry->id}}. {{$entry->title}}</div>
                <div class="card-body">
                    <p>{{$entry->content}}</p>
                </div>

                <div class="card-footer">
                    Autor: {{$entry->user->name}}
                </div>
            </div>
            @endforeach

            {{$entries->links()}}

        </div>
    </div>
</div>
@endsection
