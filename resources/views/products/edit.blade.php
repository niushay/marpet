@extends('layouts.app')

@section('title')
    ویرایش محصول
@endsection

@section('styles')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">  ویرایش محصول {{$product->title}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('products.update', $product->id)}}" id="newUser" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input value="{{$product->title}}" type="text" class="form-control form-control-sm" id="title" placeholder="عنوان" name="title">
                                </div>
                                <div class="form-group col">
                                    <input value="{{$product->sub_title}}" type="text" class="form-control form-control-sm" id="sub_title" placeholder="زیرعنوان" name="sub_title">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control form-control-sm" id="description" placeholder="توضیحات" name="description">{{$product->description}}</textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input value="{{$product->price}}" type="number" class="form-control form-control-sm" id="price" placeholder="قیمت" name="price">
                                </div>
                                <div class="form-group col">
                                    <input value="{{$product->brand}}" type="text" class="form-control form-control-sm" id="brand" placeholder="برند" name="brand">
                                </div>
                            </div>

                            <div class="form-group">
                                <input value="{{$product->qty}}" type="number" class="form-control form-control-sm" id="qty" placeholder="تعداد" name="qty">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm">بروز رسانی</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
