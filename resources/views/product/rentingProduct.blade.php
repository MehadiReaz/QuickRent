@extends('customer.layout.app')

@section('heading', 'Rent this Product?')

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
                        <h1>Product Info</h1>
                            <div class="rentProduct-form">
                                @isset($msg)
                                <span class="text-success">{{ $msg }}</span>
                                @endisset
                                <input type="text" class="form-control" name="id" value="{{$product->id}}" hidden>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$product->name}}" readonly>
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors -> first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product price</label>
                                    <input type="number" class="form-control" name="price" value="{{$product->price}}" readonly>
                                    @if($errors->has('price'))
                                    <span class="text-danger">{{ $errors -> first('price') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product category</label>
                                    <input type="text" class="form-control" name="price" value="{{$product->category}}" readonly>
                                    @if($errors->has('category'))
                                    <span class="text-danger">{{ $errors -> first('category') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Product details</label>
                                    <input type="text" class="form-control" name="details" value="{{$product->details}}" readonly>
                                    @if($errors->has('details'))
                                    <span class="text-danger">{{ $errors -> first('details') }}</span>
                                    @endif
                                </div>
                                <br>
                                <h1>Owner Info</h1>
                                <div class="col-md-9">
                                    <div class="mb-4">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$owner->name }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$owner->email }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$owner->phone }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="form-control" name="country" value="{{$owner->country }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$owner->address }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" name="city" value="{{$owner->city }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" name="state" value="{{$owner->state }}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">zip</label>
                                        <input type="text" class="form-control" name="zip" value="{{$owner->zip }}" readonly>
                                    </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary bg-website">Continue</button>
                                </div>
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
