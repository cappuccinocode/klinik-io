@extends('layouts.app')

@section('third_party_stylesheets')
{{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/colreorder/1.5.6/css/colReorder.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div class="container-fluid">

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Doctor Schedule - Add New</h1>
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
