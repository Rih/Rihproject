@extends('layouts.erp')

@section('title', 'Services')

@section('content')



    <div class="row">
        <table id="dataTable" class="table table-striped table-bordered dataTable" role="grid" width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>name</td>
                    <td>URL</td>
                    <td>created_at</td>
                    <td>updated_at</td>
                </tr>
            </thead>
            <tbody>
           
            </tbody>
        </table>
    </div>

@endsection

@push('pageScripts')
<script id="scripts">
$(function() {
    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('datatables/data') !!}',
        dom: 'Bfrtip',
        buttons:  {
            buttons: [
                { extend: 'copy', className: 'btn btn-primary' },
                { extend: 'excel', className: 'btn btn-primary' },
                { extend: 'csv', className: 'btn btn-primary' },
                { extend: 'pdf', className: 'btn btn-danger' },
                { extend: 'print', className: 'btn btn-success' },
            ]
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'url', name: 'url' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ],
       oLanguage: {
         sProcessing: '@lang('datatable.processing')',
         sZeroRecords: '@lang('datatable.norecords')',
       }
    });
});
</script>
 <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
 <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
 <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
 <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
 <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
 <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>


@endpush


