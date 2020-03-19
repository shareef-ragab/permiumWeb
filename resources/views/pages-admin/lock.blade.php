@extends('pages-admin.part-admin.app-nNav-admin')
@section('title-page',"lock")
@section('classes-body','lockscreen')
@section('content')
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="{{url('/')}}"><b>Admin</b>LTE</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">{{$user->name}}</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="/dist/img/user1-128x128.jpg" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form action="{{route('unlock')}}"  class="lockscreen-credentials" method="post">
                @csrf
                <div class="input-group">
                    <input type="hidden" name="email" value="{{$user->email}}">
                    <input type="password" class="form-control" placeholder="password">
                    <div class="input-group-append">
                        <button type="button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>
        <div class="text-center">
            <a href="{{route('login_user')}}">Or sign in as a different user</a>
        </div>
    </div>
    <!-- /.center -->
@endsection
