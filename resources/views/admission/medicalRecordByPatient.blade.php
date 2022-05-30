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
            <h1 class="m-0">Medical Records - By Patient</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                {{ Breadcrumbs::render() }}
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            @include('admission.medicalRecordByPatientTable')
        </div>
    </div>

</div>
@endsection

@push('page_scripts')
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js" defer></script>
<script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" defer></script>
<script src="//cdn.datatables.net/colreorder/1.5.6/js/dataTables.colReorder.min.js" defer></script>
<script src="//cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js" defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js" defer></script>
<script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js" defer></script>

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#medicalRecordTable thead tr:eq(1) th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" class="column_search" />' );
        });

        var table = $('#medicalRecordTable').DataTable({
            dom: 'Bfrtip',
            colReorder: true,
            orderCellsTop: true,
            select: true,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength', 'copy', 'excel', 'pdf', 'print'
            ],
            scrollCollapse: true,
        });

        // Apply the search
        $('#medicalRecordTable thead').on('keyup', ".column_search",function () {
            table
                .column( $(this).parent().index() )
                .search( this.value )
                .draw();
        });
    });
</script>
@endpush
