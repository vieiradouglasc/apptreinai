@extends('adminlte::page')

@section('title', 'Target List')

@section('content_header')
    <h1>Target List</h1>
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
        @foreach ($targetlists as $targetlist)
            <tr>
                <td>{{ $targetlist->id }}</td>
                <td>{{ $targetlist->name }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>
@stop