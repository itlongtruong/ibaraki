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
        <div class="col-md-4 heading-section text-center ftco-animate" class="btn-login">
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
        <div class="col-md-4 heading-section ftco-animate">
            <div id="form-login">
                <div class="form-group row col-login-id">
                    <label for="id" class="col-md-3 col-form-label text-md-right">ID</label>
                    <div class="col-md-6">
                        <input type="text" id="id" class="form-control input-id border-input" name="id" required autofocus>
                    </div>
                </div>
                <div class="form-group row col-login-pass">
                    <label for="pass" class="col-md-3 col-form-label text-md-right">パスワード</label>
                    <div class="col-md-6">
                        <input type="password" id="pass" class="form-control input-pass border-input" name="pass" required>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-3 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-primary">ログイン</button>
            </div>
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic outlined example">
                <button type="submit" class="btn btn-outline-primary">キャンセル</button>
            </div>
        </div>
        </div>
        <div class="row justify-content-center pb-1 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
            <p class="regis regis-forgot"><a href="">ID・パスワードを忘れた方はこちら</a></p>
            </div>
        </div>
    </div>    

    
    </form>

    
    

</div>
@endsection