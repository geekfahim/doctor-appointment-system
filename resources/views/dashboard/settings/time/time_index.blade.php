@extends('dashboard.layouts.masters')
@push('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                                    <tr role="row" id="idTBL{{$time->id}}" class="odd">
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>{{ $time->name }}</td>
                                                        <td>
                                                            <div class="table-actions">
                                                                <form
                                                                    action="{{ route('admin.time.destroy', $time->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a href="{{ route('admin.time.edit', $time->id) }}">
                                                                        <i class="ik ik-edit f-16"></i></a>
                                                                    <a href="#" data-id="{{ $time->id }}"
                                                                        class="delete-btn"><i
                                                                            class="ik ik-trash-2"></i></a>
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

    <script>
        $(document).ready(function() {
           var table = $('#data_table').DataTable({
                lengthChange: false,
                dom: 'Bfrtip',
            });
        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let confirmation = confirm("{{ 'Are You Sure You want to delete!' }}?");
            if (!confirmation) {
                return;
            $.ajax({
            }
                url: '/admin/time/' + id,
                type: 'DELETE',
                beforeSend: function(request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr(
                        'content'));
                },
                success: function(response) {
                    // table.ajax.reload(false);
                    toastr.success(response.success,'Success');
                    location.reload();

                },
                error: function(data) {
                    let msg = '';
                    if (data.responseJSON.errors) {
                        $.each(data.responseJSON.errors, function(i, error) {
                            msg += '<p>' + error[0] + '</p>';
                        })
                    } else {
                        msg = data.responseJSON.message;
                        toastr.error(msg,'Error');
                    }
                }

            })
        });
    });

    </script>
@endpush
