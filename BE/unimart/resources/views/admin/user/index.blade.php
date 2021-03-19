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
        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                <h5 class="m-0 ">Danh sách thành viên</h5>
                <div class="form-search form-inline">
                    <form action="">
                        <input type="text" name="keyword" class="form-control form-search"
                            value="{{ request()->input('keyword') }}" placeholder="Tìm kiếm">
                        <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="analytic">
                    <a href="{{ request()->fullUrlWithQuery(['status' => 'active']) }}" class="text-primary">Kích hoạt<span
                            class="text-muted">({{ $count[0] }})</span></a>
                    <a href="{{ request()->fullUrlWithQuery(['status' => 'trash']) }}" class="text-primary">Vô hiệu hóa<span
                            class="text-muted">({{ $count[1] }})</span></a>
                </div>
                <form action="{{ url('admin/user/action') }}">
                    <div class="form-action form-inline py-3">
                        <select class="form-control mr-1" id="act" name="act">

                            @if ($status == 'trash')
                                @foreach ($list_act as $key => $act)
                                    <option value={{ $key }}>{{ $act }}</option>
                                @endforeach

                            @else
                                @foreach ($list_act as $key => $act)
                                    <option value={{ $key }}>{{ $act }}</option>
                                @endforeach
                            @endif
                        </select>

                        <input type="submit" name="btn-act" value="Áp dụng" class="btn btn-primary"
                            onclick="return confirm('Bạn có chắc muốn ... ?')">
                    </div>
                    <table class="table table-striped table-checkall">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="checkall">
                                </th>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Quyền</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->total() > 0)
                                @php
                                $t = 0;
                                @endphp
                                @foreach ($users as $user)
                                    @php
                                    $t++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="list_check[]" value="{{ $user->id }}">
                                        </td>
                                        <th scope="row">{{ $t }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>Editor</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <a href="{{ url('admin/user/edit', $user->id) }}" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-edit"></i></a>
                                            @if (Auth::user()->id != $user->id)
                                                <a href="{{ route('user.delete', $user->id) }}"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa thành viên {{ $user->name }} ?')"
                                                    class="btn btn-danger btn-sm rounded-0 text-white" type="button"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                        class="fa fa-trash"></i></a>
                                            @endif

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
                </form>
                {{ $users->links() }}
            </div>

        </div>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("act").value;
        //   document.getElementById("demo").innerHTML = "You selected: " + x;
        return confirm('Bạn có chắc muốn '+ x +' ?');
        }
        </script>
@endsection
