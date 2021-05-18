@extends('public.layouts.master-index')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-1 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>パスワードを再設定する</h4>
        </div>
    </div>

    <form action="" method="post">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 col-10 heading-section ftco-animate">
                <div id="form-login">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">E メールアドレス</label>
                        <div class="col-sm-8">
                        <input type="email" required class="form-control" name="email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-5 col-sm-10 col-10 heading-section text-center ftco-animate mt-4" class="btn-login">
                <div class="btn-group btn-common" role="group">
                    <button type="submit" class="btn btn-primary">続行</button>
                </div>
            </div>
            </div>
        </div>    
    </form>
</div>
@endsection