@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 heading-section ftco-animate">
            <div class="line-form">7．申請内容確認</div>
        </div>
    </div>
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-6 heading-section ftco-animate">
            <div id="form-confirm">
            <p>入力内容表示</p>   
            </div>
        </div>
    </div>  

    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-6 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-common" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">戻る</button>
            </div>
            <div class="btn-group btn-common" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">申請する</button>
            </div>
        </div>
    </div>
</div>
@endsection