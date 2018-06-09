@extends('admin.layouts.app_admin')

@section('content');

<div class="container">
    @component('admin.components.beadcrumb')
        @slot('title') Editing category @endslot
        @slot('parent') Main @endslot
        @slot('active') Categories @endslot
    @endcomponent

    <hr>

    <form action="{{ route('admin.category.update', $category) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="put">
        {{csrf_field()}}

        {{--Form include--}}
        @include('admin.categories.partials.form')
    </form>

</div>
@endsection