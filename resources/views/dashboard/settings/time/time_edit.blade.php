@extends('dashboard.layouts.masters')

@section('content')
    <div class="container">
        @include('dashboard.settings.time._breadcrumb')
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Edit Time') }}</h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('admin.time.update',$time->id )}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time">{{ __('Time') }} <span class="text-danger">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid
                                @enderror"
                                            name="name" id="time" placeholder="e.g:6:00 am,6:30 pm"
                                            value="{{ $time->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary update mr-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

{{-- <script>
    $(document).ready(function(){
        $('.update').on('click',function(){

        });
    });
</script> --}}
