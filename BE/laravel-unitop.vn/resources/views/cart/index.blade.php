@extends('layouts.shop')

@section('content')
    <div id="wp-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Giỏ hàng</h1>
                    <p>Có {{ Cart::count() }} sản phẩm trong giỏ hàng</p>
                    @if (Cart::count() > 0)
                        <form action="{{url('cart/update')}}" method="POST">
                            @csrf
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                        <th scope="col">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $stt=0
                                    @endphp
                                    @foreach (Cart::content() as $item)
                                        @php
                                        $stt++
                                        @endphp
                                        <tr>
                                            <td scope="row">{{ $stt }}</td>
                                            <td>
                                                <img src="{{ asset($item->options->thumbnail) }}" width="100px" alt="">
                                            </td>
                                            <td scope="col"><a href="">{{ $item->name }}</a></td>
                                            <td scope="col">{{ number_format($item->price, 0, '', '.') }}$</td>
                                            <td scope="col">
                                                <input type="number" min='1' name='qty[{{ $item->rowId }}]' style="width:50px; text-align: center" value="{{ $item->qty }}">
                                            </td>
                                            <td scope="col">{{ number_format($item->total, 0, '', '.') }}$</td>
                                            <td><a href="{{ url('cart/delete', $item->rowId) }}" class="text-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan='6' class="text-right">Tổng:</td>
                                        <td><strong>{{ Cart::total() }}$</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <input type="submit" class="btn btn-primary" value="Cập nhật giỏ hàng" name="btn_update">
                            <a href="{{ url('cart/destroy') }}" class="text-danger">Xóa giỏ hàng</a>
                        </form>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
