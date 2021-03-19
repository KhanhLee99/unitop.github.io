<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    //

    
    public function __construct()
    {
        
    }
    public function index(Request $request)
    {
        $status = $request->input('status');
        // $act = $this->act;
        if ($status == 'trash') {
            $list_act = [
                'softDelete' => 'Xóa vĩnh viễn',
                'restore' => 'Khôi phục'
            ];
            $users = User::onlyTrashed()->paginate(10);
        } else {
            $list_act = [
                'delete' => 'Xóa tạm thời',
            ];
            $keyword = '';
            if ($request->input('btn-search')) {
                $keyword = $request->input('keyword');
            }
            $users = User::where('name', 'LIKE', "%{$keyword}%")->paginate(10);
        }
        $count_user_trash = User::onlyTrashed()->count();
        $count_user_active = User::count();
        $count = [$count_user_active, $count_user_trash];
        //
        return view('admin.user.index', compact('users', 'count', 'status', 'list_act'));
    }

    public function store(Request $request)
    {
        if ($request->input('btn-add')) {
            $request->validate(
                [
                    'name' => 'required | string | max: 255',
                    'email' => 'required | string | email | max: 255 | unique:users',
                    'password' => 'required | string | min: 8 | confirmed'
                ],
                [
                    'required' => ':attribute không được để trống',
                    'min' => ':attribute có độ dài ít nhất :min kí tự',
                    'max' => ':attribute có độ dài ít nhất :max kí tự',
                    'confirmed' => 'Xác nhận :attribute không thành công',
                    'email' => ':attribute không hợp lệ',
                    'unique' => ':attribute đã được sử dụng'
                ],
                [
                    'name' => 'Họ và tên',
                    'email' => 'Email',
                    'password' => 'Mật khẩu'
                ]
            );

            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect('admin/user')->with('status', 'Thêm user mới thành công');
        }
    }

    public function add()
    {
        return view('admin.user.add');
    }
    public function delete($id)
    {
        if (Auth::id() != $id) {
            $user = User::find($id);
            $user->delete();
            return redirect('admin/user')->with('delete', 'Đã xóa user thành công');
        } else {
            return redirect('admin/user')->with('delete', 'Không thể tự xóa tài khoản của mình');
        }
    }

    public function action(Request $request)
    {
        if ($request->input('btn-act')) {
            $list_check = $request->input('list_check');
            $act = $request->input('act');
            if (!empty($list_check)) {
                foreach ($list_check as $k => $v) {
                    if ($v == Auth::id()) {
                        unset($list_check[$k]);
                    }
                }
                if (empty($list_check)) {
                    return redirect('admin/user')->with('delete', 'Không được xóa tài khoản cá nhân');
                } else {
                    if ($act == 'delete') {
                        User::destroy($list_check);
                        return redirect('admin/user')->with('delete', 'Đã xóa tài khoản thành công');
                    }
                    if ($act == 'restore') {
                        User::onlyTrashed()->whereIn('id', $list_check)->restore();
                        return redirect('admin/user?status=trash')->with('status', 'Đã khôi phục tài khoản thành công');
                    }
                    if ($act == 'softDelete') {
                        User::onlyTrashed()->whereIn('id', $list_check)->forceDelete();
                        return redirect('admin/user?status=trash')->with('delete', 'Đã xóa vĩnh viễn tài khoản thành công');
                    }
                }
            } else {
                return redirect('admin/user')->with('delete', 'Bạn cần chọn tài khoản thực hiện');
            }
        }
    }

    function edit(Request $request, $id){
        $user = User::find($id);
        if($request->input('btn-edit')){
            $name = $request->input('name');
            $user->name = $name;
            $user->save();
            return redirect('admin/user')->with('status', 'Đã cập nhật thành công');
        }
        return view('admin.user.edit', compact('user'));
    }
}
