@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Monitoring')

{{-- Content body: main page content --}}

@section('content_body')
    {{-- Setup data for datatables --}}
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@php
    $heads = [
        'No',
        'Invoice',
        'Kapal',
        ['label' => 'ETD Port'],
        ['label' => 'ATD Port'],
        ['label' => 'ETA Jkt'],
        ['label' => 'ATA Jkt'],
        ['label' => 'ETA Aii'],
        ['label' => 'ATA Aii'],
        ['label' => 'Actions', 'no-export' => true, 'width' => 15],
    ];
    $config['dom'] = '<"row" <"col-sm-7" B> <"col-sm-5 d-flex justify-content-end" i> >
                  <"row" <"col-12" tr> >
                  <"row" <"col-sm-12 d-flex justify-content-start" f> >';
    $config['paging'] = false;
    $config['lengthMenu'] = [10, 50, 100, 500];
@endphp
{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="tb_shipment" :heads="$heads" head-theme="dark" striped hoverable with-buttons>
    @for ($i = 0; $i < 100; $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>No_Invoice</td>
            <td>Evergreen</td>
            <td>01-Aug-2024</td>
            <td>01-Aug-2024</td>
            <td>01-Aug-2024</td>
            <td>01-Aug-2024</td>
            <td>01-Aug-2024</td>
            <td>01-Aug-2024</td>
            <td>
                <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>
                <button class="btn btn-xs btn-default text-danger mx-1 shadow" onclick="onDeleteButtonClick()"
                    title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
            </td>
        </tr>
    @endfor
</x-adminlte-datatable>

@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
<script>
    // Add click event listener to the button
    function onDeleteButtonClick() {
        // Trigger SweetAlert dialog
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
@endpush
