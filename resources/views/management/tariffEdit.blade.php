@extends('layouts.app')

@section('third_party_stylesheets')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-fluid">

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tariff - Edit Tariff</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                {{ Breadcrumbs::render() }}
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="card-body">

        </div>
    </div>

</div>
@endsection

@push('page_scripts')
@endpush
