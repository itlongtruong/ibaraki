@extends('public.layouts.master-index')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-1 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>新しいパスワード</h4>
        </div>
    </div>
    <form action="" method="post">
     @csrf
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 col-10 heading-section ftco-animate">
                <div id="form-login">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">新しいパスワード</label>
                        <div class="col-sm-8">
                        <input type="password" required class="form-control" name="pass">
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">新しいパスワード確認</label>
                        <div class="col-sm-8">
                        <input type="password" required class="form-control" name="pass-new">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-8 col-sm-10 col-12 heading-section text-center ftco-animate mt-4" class="btn-login">
                <div class="btn-group btn-common width-169" role="group">
                    <button type="submit" class="btn btn-primary width-170">変更内容を保存する</button>
                </div>
            </div>
            </div>
        </div>    
    </form>
</div>
@endsection