<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-clock bg-blue"></i>
                <div class="d-inline">
                    <h5>{{ __('Time') }}</h5>
                    <span>Create a Time</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ Route('dashboard') }}"></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">{{ __('Dashboard') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.time.index') }}">
                            {{ __('Time') }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
