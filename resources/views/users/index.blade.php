@extends('layouts.app')

@section('title')
    کاربران
@endsection

@section('styles')
    <style>
        td, th { text-align:center }
        body { font-size: 15px; }
        button { border:none; background: none}
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <h3 class="card-title text-right">کاربران</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="width: 5%">ردیف</th>
                                <th style="width: 5%">تصویر</th>
                                <th style="width: 20%">نام کاربر</th>
                                <th style="width: 20%">ایمیل</th>
                                <th style="width: 10%">شماره تماس</th>
                                <th style="width: 20%">آدرس</th>
                                <th style="width: 5%">نقش</th>
                                <th style="width: 15%">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>
                                        <img class="rounded" style="width: 45px; height: 45px" src="{{url('storage/'.$user->picture)}}" alt="">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->role}}</td>
                                    <td >
                                        <div class="row  justify-content-center" style="margin:0 auto">
                                            <a class="text-warning" href="{{route('users.edit', $user->id)}}"><span class="fa fa-pencil-alt"></span></a>
                                            /
                                            <form method="post" action="{{route('users.destroy', $user->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger" type="submit"><span
                                                        class="fa fa-trash"></span></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="col-md-12">
            {{$users->links()}}
        </div>
    </div>

@endsection
