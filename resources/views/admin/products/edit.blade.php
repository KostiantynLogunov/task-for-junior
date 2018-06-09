@extends('admin.layouts.app_admin')

@section('content');

<div class="container">
    @component('admin.components.beadcrumb')
        @slot('title') Editing product @endslot
        @slot('parent') Main @endslot
        @slot('active') Products @endslot
    @endcomponent

    <hr>

    <form action="{{ route('admin.product.update', $product) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        {{csrf_field()}}

        {{--Form include--}}
        @include('admin.products.partials.form')
    </form>

</div>
@endsection