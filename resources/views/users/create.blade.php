@extends('layouts.app')

@section('title')
    ایجاد کاربر جدید
@endsection

@section('styles')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">کاربر جدید</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('users.store')}}" id="newUser" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-sm" id="name" placeholder="نام کاربری" name="name">
                                </div>
                                <div class="form-group col">
                                    <input type="password" class="form-control form-control-sm" id="password" placeholder="رمز عبور" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-sm" id="email" placeholder="ایمیل" name="email">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control form-control-sm" id="phone" placeholder="شماره تماس" name="phone">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control form-control-sm" id="address" placeholder="آدرس" name="address"></textarea>
                            </div>

                            <div class="form-group">
                                <select class="form-control form-control-sm" id="role" name="role">
                                    <option value="">انتخاب کنید</option>
                                    <option value="0">admin</option>
                                    <option value="1">buyer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file form-control-sm" id="picture" name="picture">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm " onsubmit="">ذخیره</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
