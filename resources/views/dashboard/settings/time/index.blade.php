@extends('dashboard.layouts.masters')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
@endpush

@section('content')
<div class="container">
@include('dashboard.settings.time._breadcrumb')

<div class="row justify-content-center">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex justify-content-between">
    <h3>{{ __('All Time') }}</h3>
    <a href="{{ route('admin.time.create') }}" class="btn btn-primary float-right"><i
            class="ik ik-plus-circle"></i>{{ __('Add Time') }}</a>
</div>
<div class="card-body">
<div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="row">
    <div class="col-md-12">
    <table id="data_table" class="table dataTable no-footer"
        aria-describedby="data_table_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" aria-sort="ascending">S/L</th>
                <th class="sorting">Times</th>
                <th class="nosort sorting_disabled" style="width: 120px">Actions</th>
            </tr>
        </thead>
<tbody>
    @if (count($times) > 0)
        @foreach ($times as $time)
            <tr role="row" class="odd">
                <td class="sorting_1">{{ $loop->iteration }}</td>
                <td>{{ $time->name }}</td>
                <td>
                    <div class="table-actions">
                        <form
                            action="{{ route('admin.time.destroy', $time->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('admin.time.edit', $time->id) }}" class="btn btn-xs">
                                <i class="ik ik-edit f-16"></i></a>
                            <button type="submit" class="btn btn-xs"><i
                                    class="ik ik-trash-2 f-16"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    @else
        <td>No data found</td>
    @endif
</tbody>
        </table>
    </div>
</div>
</div>
</div>
    </div>
</div>
</div>
</div>

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script>


    <script>
        $(document).ready(function() {
           $('#data_table').DataTable({
                lengthChange: false,
                dom: 'Bfrtip',
            });
        });
    </script>
@endpush
