<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-user bg-blue"></i>
                <div class="d-inline">
                    <h5>{{ __('Doctor') }}</h5>
                    <span>Create a doctor</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ Route('dashboard') }}"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">{{ __('Dashboard') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.doctor.index') }}">
                            {{ __('Doctor') }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
