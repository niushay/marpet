@extends('layouts.app')

@section('title')
    ویرایش دسته بندی
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
                        <h3 class="card-title"> ویرایش دسته بندی{{$category->title}} </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('categories.store')}}" id="newCategory" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input value="{{$category->title}}" type="text" class="form-control form-control-sm" id="title" name="title" placeholder="عنوان">
                            </div>

                            <div class="form-group">
                                <label for="category" class="form-label">زیرمجموعه</label>
                                <select  class="form-control form-control-sm" id="super_category_id" name="super_category_id">
                                    <option value="" {{$category->id == null ? 'selected' : ''}}>انتخاب کنید</option>
                                    @foreach($categories_super as $category_super)
                                        <option {{$category_super->id == $category->category_super_id ? 'selected' : ''}} value="{{$category_super->id}}">{{$category_super->title}}</option>
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
