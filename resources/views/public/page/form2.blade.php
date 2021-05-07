@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-4 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 heading-section ftco-animate">
            <div class="line-form">2．連絡者</div>
        </div>
    </div>
    
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-8 heading-section ftco-animate">
            <span>※日中連絡が確実に取れる責任者の役職名にチェックをし，詳細を下欄に記入してください。</span>
        </div> 
    </div>

    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-5 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">戻る</button>
            </div>
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">一時保存</button>
            </div>
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">次へ</button>
            </div>
        </div>
    </div>
         
</div>
@endsection