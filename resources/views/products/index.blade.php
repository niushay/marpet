@extends('layouts.app')

@section('title')
    محصولات
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
                        <h3 class="card-title text-right">محصولات</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%">ردیف</th>
                                <th style="width: 5%">تصویر</th>
                                <th style="width: 20%">عنوان محصول</th>
                                <th style="width: 20%">زیر عنوان</th>
                                <th style="width: 20%">توضیحات</th>
                                <th style="width: 10%">قیمت</th>
                                <th style="width: 20%">برند</th>
                                <th style="width: 5%">تعداد</th>
                                <th style="width: 10%">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>
{{--                                        @if($product->pictures->first() != null)--}}
                                            <img class="img-thumbnail" style="width: 45px; height: 45px" src="{{url($product->picture)}}" alt="pic">
{{--                                        @endif--}}
                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->sub_title}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->brand}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td >
                                        <div class="row  justify-content-center" style="margin:0 auto">
                                            <a class="text-warning" href="{{route('products.edit', $product->id)}}"><span class="fa fa-pencil-alt"></span></a>
                                            /
                                            <form method="post" action="{{route('products.destroy', $product->id)}}">
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
            {{$products->links()}}
        </div>
    </div>
@endsection
