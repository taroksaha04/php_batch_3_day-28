@extends('master')

@section('title')
    Edit student page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-secondary font-weight-bold">Edit Student Form</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            {{--                            update er jonno id die url e pathiechi--}}
                            <form action="{{route('update-product',['id' => $product->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{$product->name}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category" value="{{$product->category}}"class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="brand" value="{{$product->brand}}"class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Product price</label>
                                    <div class="col-md-9">
                                        <input type="number" name="price" value="{{$product->price}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Product image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" value="{{$product->image}}"class="form-control-file" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success btn-block" value="Create New Product"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

