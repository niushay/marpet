@extends('layouts.app')

@section('title')
    ایجاد محصول جدید
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
                        <h3 class="card-title">محصول جدید</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('products.store')}}" id="newUser" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-sm" id="title" placeholder="عنوان" name="title">
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-sm" id="sub_title" placeholder="زیرعنوان" name="sub_title">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control form-control-sm" id="description" placeholder="توضیحات" name="description"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="number" class="form-control form-control-sm" id="price" placeholder="قیمت" name="price">
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-sm" id="brand" placeholder="برند" name="brand">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-sm" id="qty" placeholder="تعداد" name="qty">
                            </div>

                            <div class="form-group">
                                <input type="file" multiple="multiple"   class="form-control-file form-control-sm" id="picture" name="pictures[]">
                            </div>

                            <div class="form-group">
                                <select  class="form-control form-control-sm" id="category" name="category_id">
                                    <option value="">دسته بندی را انتخاب کنید</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm">ذخیره</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
