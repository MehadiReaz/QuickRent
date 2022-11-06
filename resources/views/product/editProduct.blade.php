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
                        <form action="{{ route('editProduct_submit') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="addProduct-form">
                                <input type="text" class="form-control" name="id" value="{{$product->id}}" hidden>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors -> first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product price</label>
                                    <input type="number" class="form-control" name="price" value="{{$product->price}}">
                                    @if($errors->has('price'))
                                    <span class="text-danger">{{ $errors -> first('price') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label" >Product category</label>
                                    <select id="category" class="form-control" name="category">
                                        <ul class="dropdown-menu" aria-labelledby="category">
                                            @foreach ($categorys as $category)
                                            <li><option value={{$category->name}} @if ($product->category==$category)
                                               @selected(true)
                                            @endif >{{$category->name}}</option></li>
                                            @endforeach
                                        </ul>
                                    </select>
                                    @if($errors->has('category'))
                                    <span class="text-danger">{{ $errors -> first('category') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Product details</label>
                                    <input type="text" class="form-control" name="details" value="{{$product->details}}">
                                    @if($errors->has('details'))
                                    <span class="text-danger">{{ $errors -> first('details') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <img src="{{ asset('uploads/product/'.$product->photo)}}" alt="" >
                                    <input type="file" name="photo" value="{{$product->photo}}" >
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
