@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-1 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
        <div class="col-md-7 heading-section text-center ftco-animate">
        <p>登録をしてからご利用をお願いいたします。
        <br>ID とパスワードを入力し、ログインしてください。</p>
        </div>

        <div class="col-md-7 heading-section text-center ftco-animate">
        <p class="regis"><a href="{{ url('register')}}">新規登録はこちら</a></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5 heading-section text-center ftco-animate" class="btn-login">
            @if (\Session::has('danger'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ \Session::get('danger') }}
            </div>
            @endif
        </div>
    </div>

    <form action="{{ asset ('/login')}}" method="post">
     @csrf
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 col-10 heading-section ftco-animate">
                <div id="form-login">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">メールアドレス（ID）</label>
                        <div class="col-sm-8">
                        <input type="text" required class="form-control" name="id">
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">パスワード</label>
                        <div class="col-sm-8">
                        <input type="password" required class="form-control" name="pass">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-5 col-sm-10 col-10 heading-section text-center ftco-animate mt-4" class="btn-login">
                <div class="btn-group btn-common" role="group">
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </div>
                <div class="btn-group btn-common" role="group">
                    <button type="submit" class="btn btn-outline-primary">キャンセル</button>
                </div>
            </div>
            </div>
            <div class="row justify-content-center pb-1 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                <p class="regis regis-forgot"><a href="{{ url('resetpw')}}">ID・パスワードを忘れた方はこちら</a></p>
                </div>
            </div>
        </div>    
    </form>
</div>
@endsection