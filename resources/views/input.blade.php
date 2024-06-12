@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Input')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Input')

{{-- Content body: main page content --}}

@section('content_body')
    <x-adminlte-card title="Form" theme="dark" icon="fas fa-lg fa-keyboard">

        <form action="">
            <x-adminlte-input name="iInvoice" label="Invoice" placeholder="Nomor Invoice" label-class="text-lightblue">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-file-invoice text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="iShip" label="Kapal" placeholder="Nama Kapal" label-class="text-lightblue">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-ship text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="iShip" label="ETD Port" type="date" label-class="text-lightblue">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-calendar text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </form>
    </x-adminlte-card>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@endpush
