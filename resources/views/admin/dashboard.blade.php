@extends('admin.layouts.app_admin')

@section('content');

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron text-center">
                    <p><a href="{{route('admin.category.index')}}" class="label label-primary">Categories {{isset($count_categories)? $count_categories : 0}}</a></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="jumbotron text-center">
                    <p><a href="{{route('admin.product.index')}}" class="label label-primary">Products {{isset($count_products)? $count_products : 0}}</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-default">Fast Creating category</a>

            </div>

            <div class="col-sm-6">
                <a href="{{ route('admin.product.create') }}" class="btn btn-block btn-default">Fast creating product</a>

            </div>
        </div>
    </div>
@endsection()