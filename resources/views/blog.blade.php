@extends('layout.master')
@section('content')
    <div class="title m-b-md">
        Raising the bar
    </div>
    @if (Session::has('user'))
        <div class="not-login">
            <p class="text-danger">Chúc mừng bạn đăng nhập thành công {{ Session::get('user') }}</p>
        </div>
    @endif

    @if (Session::has('login'))
        <div class="not-login">
            <p class="text-danger">bạn đã xem
                <?php
                $views = session()->get('view');
                echo count($views);
                ?>
            </p>
        </div>
    @endif

    <a href="{{ route('logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection