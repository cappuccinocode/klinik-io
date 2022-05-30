@extends('layouts.app')

@section('third_party_stylesheets')
@endsection

@section('content')
<div class="container-fluid">

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Patient - Add New</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                {{ Breadcrumbs::render() }}
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="card card-info">
            {{-- <div class="card-header">
                <h3 class="card-title"></h3>
            </div> --}}

            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="mr_number" class="col-sm-2 col-form-label">MR Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mr_number" placeholder="Patient Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

@push('page_scripts')
@endpush
