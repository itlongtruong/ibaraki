@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-4 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-6 heading-section ftco-animate">
            <div class="line-form">6．申請対象事業　</div>
            <span>※該当する事業１つに○印を記入して下さい。</span>
        </div>
        
    </div>

    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-4 heading-section ftco-animate">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable table-form-6">
            <tbody>
                <tr>
                    <td data-id="11"><input class="form-check-input border-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td>
                        活動成果発表事業
                    </td>

                </tr>
                <tr>
                    <td data-id="22"><input class="form-check-input border-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td>
                        各種大会等参加事業
                    </td>
                  
                </tr>
                <tr>
                    <td data-id="33"><input class="form-check-input border-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td>
                        文化活動団体備品整備事業
                    </td>
                </tr>
                <tr>
                    <td data-id="44"><input class="form-check-input border-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td>
                        刊行物発刊事業
                    </td>
                </tr>
                <tr>
                    <td data-id="55"><input class="form-check-input border-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <td>
                        その他特に必要と認める事業
                    </td>
                </tr>
            
            </tbody>
        </table>
        </div>
        </div>
    </div>

    <div class="row justify-content-center pb-2 mb-3 table-form-6">
        <div class="col-md-6 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-common width-105" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">戻る</button>
            </div>
            <div class="btn-group btn-common width-105" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">一時保存</button>
            </div>
            <div class="btn-group btn-common width-169" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-danger width-170">登録内容を確認する</button>
            </div>
        </div>
    </div>
         
</div>
@endsection