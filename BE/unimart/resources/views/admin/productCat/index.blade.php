@extends('layouts.admin')
@section('content')

    <div id="content" class="container-fluid">
        @if (session('status'))
            <div class='alert alert-success'>
                {{ session('status') }}
            </div>
        @endif
        @if (session('delete'))
            <div class='alert alert-danger'>
                {{ session('delete') }}
            </div>
        @endif
        <div class="row">
            <div class="col-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Danh mục sản phẩm
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/product/cat/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên danh mục</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{ request()->input('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục cha</label>
                                <select class="form-control" id="">
                                    <option>Chọn danh mục</option>
                                    <option>Danh mục 1</option>
                                    <option>Danh mục 2</option>
                                    <option>Danh mục 3</option>
                                    <option>Danh mục 4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trạng thái</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Chờ duyệt
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                        value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Công khai
                                    </label>
                                </div>
                            </div>
                            <input type="submit" name="btn-add" class="btn btn-primary" value="Thêm mới">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Danh sách
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($total > 0)
                                    @php
                                    $t = 0;
                                    @endphp
                                    @foreach ($productCat as $cat)
                                        @php
                                        $t++;
                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $t }}</th>
                                            <td>{{ $cat->name }}</td>
                                            <td>Otto</td>
                                            <td>
                                                <a href="{{ url('admin/product/cat/edit', $cat->id) }}" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="{{url('admin/product/cat/delete', $cat->id)}}"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục {{ $cat->name }} ?')"
                                                    class="btn btn-danger btn-sm rounded-0 text-white" type="button"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">Không tìm thấy </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
