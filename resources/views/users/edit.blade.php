@extends('layouts.app')

@section('title')
    ویرایش کاربر
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
                        <h3 class="card-title"> {{$user->name}} ویرایش کاربر</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('users.update', [$user->id])}}" id="newUser" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{$user->name}}">
                                </div>
                                <div class="form-group col">
                                    <input type="password" class="form-control form-control-sm" id="password"  name="password" value="{{$user->password}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-sm" id="phone" placeholder="شماره تماس" name="phone" value="{{$user->phone}}">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control form-control-sm" id="address" placeholder="آدرس" name="address">{{$user->address}}</textarea>
                            </div>

                            <div class="form-group">
                                <select class="form-control form-control-sm" id="role" name="role">
                                    <option value="">انتخاب کنید</option>
                                    <option {{$user->role == 'admin' ? 'selected' : ''}} value="0">admin</option>
                                    <option {{$user->role == 'buyer' ? 'selected' : ''}} value="1">buyer</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm " onsubmit="">بروز رسانی</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
