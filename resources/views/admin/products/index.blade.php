@extends('admin.layouts.app_admin')

@section('content');
<div class="container">
    @component('admin.components.beadcrumb')
        @slot('title') List of products @endslot
        @slot('parent') Main @endslot
        @slot('active') Products @endslot
    @endcomponent
    <hr>

    <a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right">
        <i class="far fa-plus-square"></i> Create Product
    </a>

    <table class="table table-striped">
        <thead>
        <th>Title</th>
        <th>Category</th>
        <th>Description</th>
        <th>Picture</th>
        <th>DO</th>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{ \App\Category::find($product->category)->title }}</td>
                <td>{!! $product->description!!}</td>
                <td><img src="/images/{{$product->image}}" height="100" alt=""></td>
                <td>

                    <form  onsubmit="if(confirm('Do you want delete product {{$product->title}} ?')){ return true }else{ return false }" action="{{ route('admin.product.destroy', $product) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}

                        <a class="btn btn-default" href="{{ route('admin.product.edit', $product) }}">
                            <i class="fa fa-edit"></i>
                        </a>                       &nbsp;&nbsp;
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center text-danger">No data</td>
            </tr>

        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">
                    {{$products->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
@endsection
