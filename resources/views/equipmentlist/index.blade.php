@extends('adminlte::page')

@section('title', 'Equipment List')

@section('content_header')
    <h1>Equipment List</h1>
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
        @foreach ($equipmentlists as $equipmentlist)
            <tr>
                <td>{{ $equipmentlist->id }}</td>
                <td>{{ $equipmentlist->name }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>
@stop