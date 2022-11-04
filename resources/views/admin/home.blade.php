@extends('admin.layout.app')

@section('heading', 'Dashboard')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('heading')</h1>
        </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <a href="{{ route("viwe_customer") }}"><button type="submit" class="btn btn-primary btn-lg btn-block">
                        Viwe Customer 
                    </button></a>
                    
                </div>
            </div>
        </div>
    </section>
</div>

@endsection