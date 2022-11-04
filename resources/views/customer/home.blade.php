@extends('customer.layout.ap')
@section('heading', 'Dashboard')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>HomePage</h1>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <a href="{{ route("myProducts") }}"><button type="submit" class="btn btn-primary btn-lg btn-block">
                Viwe Products
            </button></a>
            
        </div>
    </div>
</div>
    </section>
</div>

@endsection