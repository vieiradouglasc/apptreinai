@extends('adminlte::page')

@section('title', 'Body Part List')

@section('content_header')
    <h1>Body Part List</h1>
@stop
@php
    $heads = [
        // representa o thead da table
        'ID',
        'Nome',
        'Ações',
    ];
@endphp

@section('content')
<x-adminlte-datatable id="table1" :heads="$heads">
        @foreach ($bodypartlists as $bodypartlist)
            <tr>
                <td>{{ $bodypartlist->id }}</td>
                <td>{{ $bodypartlist->name }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>
@stop