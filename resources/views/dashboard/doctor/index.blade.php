@extends('dashboard.layouts.masters')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap4.min.css"> --}}
@endpush

@section('content')
<div class="container">
@include('dashboard.doctor._breadcrum')

<div class="row justify-content-center">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex justify-content-between">
<h3>{{ __('All Doctors') }}</h3>
<a href="{{ route('admin.doctor.create') }}"
class="btn btn-primary float-right"><i class="ik ik-plus-circle"></i>{{ __('Add Doctor') }}</a>
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
<th class="nosort sorting_disabled">Photo</th>
<th class="sorting">Name</th>
<th class="sorting">Department</th>
<th class="sorting">Email</th>
<th class="nosort sorting_disabled" style="width: 100px">Actions</th>
</tr>
</thead>
<tbody>
@if (count($doctors) > 0)
@foreach ($doctors as $doctor)
<tr role="row" class="odd">
<td class="sorting_1">{{ $loop->iteration }}</td>
<td>
    @if ($doctor->profile_photo_path)
        <img src="{{ asset('storage/images/doctors/' . $doctor->profile_photo_path) }}"
            class="table-user-thumb" alt="">
    @else
        <img src="https://via.placeholder.com/150"
            class="table-user-thumb" alt="image">
    @endif
</td>
<td>{{ $doctor->name }}</td>
<td>{{ $doctor->department }}</td>
<td>{{ $doctor->email }}</td>
<td>
    <div class="table-actions">
        <a href=""><i class="ik ik-eye"></i></a>
        <a href="{{ route('admin.doctor.edit', $doctor->id) }}"><i
                class="ik ik-edit-2"></i></a>
        <a href="#" data-id="{{ $doctor->id }}"
            class="delete"><i
                class="ik ik-trash-2"></i></a>
        {{-- <form action="{{ route('admin.doctor.destroy', $doctor->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-sm"><i class="ik ik-trash-2"></i></button>
</form> --}}
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

            // $('.delete').onClick() {
            //     alert('qqqqq');
            //     console.log('aaaaaaaaaaa');
            // }

            $('.delete').click(function() {

                var id = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");
                confirm("Are you sure you want to delete this ? ");
                $.ajax({
                    url: "doctor/" + id,
                    method: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function() {
                        console.log("it Works");
                    }
                });
            });
            $('#data_table').DataTable({
                lengthChange: false,
                dom: 'Bfrtip',
            });
        });
    </script>
@endpush
