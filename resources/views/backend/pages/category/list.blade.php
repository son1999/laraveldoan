@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-3">
                        <p class="mt-1">{{ $message }}</p>
                    </div>
                @endif
                <h2 class="heading bg-dark p-2 mt-4 text-center">Table Category</h2>
                <table class="table table-bordered table-striped table-hover text-justify display" id="table_id">
                    <thead class="black white-text">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $key => $value)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$value->cate_name}}</td>
                            <td>{{$value->cate_description}}</td>
                            @if($value->cate_status == 0)
                                <td><span class="badge badge-dark"> Không hiển Thị </span></td>
                            @else
                                <td><span class="badge badge-success"> Hiển Thị </span></td>
                            @endif
                            <td>
                                <a href="{{route('category.edit',$value->id)}}"><i class="fas fa-edit text-primary"></i></a>
                                <a href="" data-toggle="modal"
                                   data-target="#exampleModal{{$value->id}}"><i
                                        class="fas fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{route('category.destroy',$value->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Xóa danh
                                                mục {{$value->cate_name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn xóa?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
