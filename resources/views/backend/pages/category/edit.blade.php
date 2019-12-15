@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="card w-100 mt-4">
                            <div class="col-12">
                                <div class="card-header">
                                    <div class="card-title text-md-center">Sửa Danh Mục Sản
                                        Phẩm
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="list-group mt-2">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="post" action="{{route('category.update',$category->id)}}">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên danh mục</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Nhập tên danh mục" name="cate_name"
                                                   value="{{$category->cate_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mô tả</label>
                                            <textarea name="cate_description" id="" cols="30" rows="7"
                                                      class="form-control"
                                                      placeholder="Nhập mô tả danh mục">{{$category->cate_description}}</textarea>
                                            @if(Session::has('error'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('error')}}
                                                </div>
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <select name="cate_status" id="" class="form-control">
                                                @if($category->cate_status == 1)
                                                    <option value="{{$category->cate_status}}" selected>Hiển thị
                                                    </option>
                                                    <option value="0">Không hiển thị</option>
                                                @endif
                                                @if($category->cate_status == 0)
                                                    <option value="{{$category->cate_status}}" selected>Không hiển thị
                                                    </option>
                                                    <option value="1">Hiển thị</option>
                                                @endif
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sửa</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
