@extends('dashboard.layouts.masters')

@section('content')
    <div class="container">
        @include('dashboard.doctor._breadcrum')
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Add Doctor') }}</h3>
                    </div>
                    @if (Session::has('message'))
                        <span class="alert alert-danger">
                            {{ Session::get('message') }}
                        </span>
                    @endif
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('admin.doctor.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="doctorname">{{ __('Name') }} <span class="text-danger">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid
                                @enderror"
                                            name="name" id="doctorname" placeholder="doctor name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">{{ __('Email') }} <span
                                                class="text-danger">*</span></label></label>
                                        <input type="email"
                                            class="form-control @error('email') is-invalid
                                @enderror"
                                            name="email" id="exampleInputEmail3" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }} <span class="text-danger">*</span>
                                        </label>
                                            <input type="password" name="password"
                                            class="form-control @error('password') is-invalid
                                @enderror"
                                            id="password" autocomplete="off">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">{{ __('Gender') }} <span
                                                class="text-danger">*</span> </label></label>
                                        <select class="form-control @error('gender') is-invalid @enderror" name="gender"
                                            id="exampleSelectGender">
                                            <option value="">Select One</option>
                                            @foreach ($genders as $gender)
                                                <option>{{ $gender }}</option>
                                            @endforeach

                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectdepartment">{{ __('Department') }} <span
                                                class="text-danger">*</span> </label></label>
                                      <select class="form-control @error('department') is-invalid @enderror" name="department"
                                            id="exampleSelectdepartment">
                                            <option value="">Select One</option>
                                            @foreach ($departments as $department)
                                                <option>{{ $department }}</option>
                                            @endforeach

                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="education">{{ __('Education') }} </label>
                                        <input type="text"
                                            class="form-control @error('education') is-invalid
                                @enderror"
                                            name="education" id="education" placeholder="doctor education"
                                            value="{{ old('education') }}">

                                        @error('education')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">{{ __('Role') }}</label>
                                        <select
                                            class="form-control @error('role_id') is-invalid
                                @enderror"
                                            name="role_id" id="role">
                                            <option value="">Select Role</option>
                                            @foreach (App\Models\Role::where('name', '=', 'Doctor')->get() as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Picture </label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="profile_photo_path"
                                                class="form-control file-upload-info @error('profile_photo_path') is-invalid
                                @enderror"
                                                placeholder="Upload Image" value="{{ old('picture') }}">
                                            @error('profile_photo_path')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">{{ __('Phone Number') }}</label>
                                        <input type="text"
                                            class="form-control @error('phone') is-invalid
                                @enderror"
                                            name="phone" id="phone" placeholder="doctor's phone"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">{{ __('Address') }}</label>
                                        <textarea
                                            class="form-control @error('address') is-invalid
                                @enderror"
                                            name="address" id="address" rows="1" value="{{ old('address') }}"></textarea>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">{{ __('Description') }}</label>
                                        <textarea
                                            class="form-control @error('description') is-invalid
                                @enderror"
                                            name="description" id="description" rows="4"
                                            value="{{ old('description') }}"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
