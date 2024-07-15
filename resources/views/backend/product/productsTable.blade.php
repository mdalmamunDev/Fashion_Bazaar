@extends('backend.layouts.master')


@section('title', 'Products')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Products table</h6>
                    <a href="{{ route('admin.pro.add') }}" type="button" class="btn btn-primary">Add Product</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">sn</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">User</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key => $value)
                                <tr>
                                    <td>
                                        <div class="ms-3">
                                            {{$key+1}}
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$value->name}}</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">{{ $value->category ? $value->category->category_name : ''}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-sm mb-0">{{ $value->user ? $value->user->name : ''}}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('admin.pro.edit', $value->id) }}" class="btn btn-warning p-2 mb-0">Update</a>
                                        <a href="{{ route('admin.pro.del', $value->id) }}" class="btn btn-danger p-2 mb-0">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection