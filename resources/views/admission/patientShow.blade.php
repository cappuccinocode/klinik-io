@extends('layouts.app')

@section('third_party_stylesheets')
@endsection

@section('content')
<div class="container-fluid">

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Patient - Show</h1>
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
