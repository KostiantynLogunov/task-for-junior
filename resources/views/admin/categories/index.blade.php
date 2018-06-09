@extends('admin.layouts.app_admin')

@section('content');
    <div class="container">
        @component('admin.components.beadcrumb')
            @slot('title') List of categories @endslot
            @slot('parent') Main @endslot
            @slot('active') Category @endslot
        @endcomponent
            <hr>

            <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
                <i class="far fa-plus-square"></i> Create Category
            </a>

            <table class="table table-striped">
                <thead>
                    <th>Denomination</th>
                    <th>Alias</th>
                    <th class="text-right">Do</th>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{$category->title}}</td>
                        <td>{{$category->alias}}</td>
                        <td>

                            <form  onsubmit="if(confirm('Delete?')){ return true }else{ return false }" action="{{ route('admin.category.destroy', $category) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}

                                <a class="btn btn-default" href="{{ route('admin.category.edit', $category) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                &nbsp;&nbsp;

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
                                {{$categories->links()}}
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
    </div>
@endsection
