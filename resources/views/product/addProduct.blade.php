@extends('customer.layout.app')

@section('heading', 'Add Product')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('heading')</h1>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <form action="{{ route('addProduct_submit') }}" method="post">

                            @csrf
                            <div class="addProduct-form">
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product Name</label>
                                    <input type="text" class="form-control" name="name">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors -> first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product price</label>
                                    <input type="number" class="form-control" name="price">
                                    @if($errors->has('price'))
                                    <span class="text-danger">{{ $errors -> first('price') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product category</label>
                                    <input type="text" class="form-control" name="category">
                                    @if($errors->has('category'))
                                    <span class="text-danger">{{ $errors -> first('category') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Product details</label>
                                    <input type="text" class="form-control" name="details">
                                    @if($errors->has('details'))
                                    <span class="text-danger">{{ $errors -> first('details') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">Submit</button>
                                </div>
                                @isset($msg)
                                    <span class="text-success">{{ $msg }}</span>
                                @endisset
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>

@endsection
