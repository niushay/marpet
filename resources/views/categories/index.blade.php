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
                                <th style="width: 5%">عنوان</th>
                                <th style="width: 20%">زیر مجموعه</th>
                                <th style="width: 20%">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>
                                        @if($category->super_caegory_id !=null)
                                            {{\App\Models\Category::find($category->super_category_id)->first()->title}}
                                        @else
                                           ------
                                        @endif
                                    </td>

                                    <td >
                                        <div class="row  justify-content-center" style="margin:0 auto">
                                            <a class="text-warning" href="{{route('categories.edit', $category->id)}}"><span class="fa fa-pencil-alt"></span></a>
                                            /
                                            <form method="post" action="{{route('categories.destroy', $category->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger" type="submit"><span class="fa fa-trash"></span></button>
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
            {{$categories->links()}}
        </div>
    </div>
@endsection
