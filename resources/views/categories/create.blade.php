@extends('layouts.app')

@section('title')
    ایجاد دسته بندی جدید
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
                        <h3 class="card-title">دسته بندی جدید</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('categories.store')}}" id="newCategory" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="عنوان">
                            </div>

                            <div class="form-group">
                                <label for="category" class="form-label">زیرمجموعه</label>
                                <select  class="form-control form-control-sm" id="super_category_id" name="super_category_id">
                                    <option value="">انتخاب کنید</option>
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
