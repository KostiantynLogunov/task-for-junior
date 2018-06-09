@extends('admin.layouts.app_admin')

@section('content');

<div class="container">
    @component('admin.components.beadcrumb')
        @slot('title') Creating of category @endslot
        @slot('parent') Main @endslot
        @slot('active') Categories @endslot
    @endcomponent

    <hr>

    <form action="{{ route('admin.category.store') }}" class="form-horizontal" method="post">
        {{csrf_field()}}

        {{--Form include--}}
        @include('admin.categories.partials.form')
    </form>

</div>
@endsection