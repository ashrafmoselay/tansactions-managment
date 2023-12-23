@extends('layouts.backend')

@section('content')

<!-- eCommerce statistic -->
<div class="row">
    @foreach ($tables as $table => $info)
        @if ($table !== 'routes')
            @include("backend.home.statistics")
        @endif
    @endforeach
    @foreach ($alerts as $key => $alert)
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="{{ $alert['color'] }}">{{ $alert['count'] }}</h3>
                            <h6>{{ $alert['title'] }}</h6>
                        </div>
                        <div>
                            <i class="fas fa-bell {{ $alert['color'] }} font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-{{ $alert['color'] }}" role="progressbar" style="width: {{ $alert['count'] }}%" aria-valuenow="{{ $alert['count'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="{{ $alert['route'] }}"
                    class="btn btn-sm btn-{{ $alert['color'] }} btn-block mt-1">
                    <i class="fa fa-eye"></i> <b>  التفاصيل</b>
                </a>
            </div>
        </div>
    </div>
@endforeach

</div>


@include("backend.home.announcements")

<!--/ eCommerce statistic -->
@endsection
