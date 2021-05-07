@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-4 heading-section ftco-animate">
            <div class="line-form">1．申請者等</div>
            <span>以下のフォームに必要事項をご入力ください。</span>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5 heading-section ftco-animate">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable">
            <tbody>
                <tr>
                    <td class="p-3 mb-2 bg-light text-black" data-id="11">団体名
                    </td>

                    <td><input type="text" value="" class="form-control border-input height-width-input">
                    <span class="size-text-ex">例）　〇〇団体</span>
                    </td>

                </tr>
                <tr>
                    <td class="p-3 mb-2 bg-light text-black" data-id="22">発足年月日</td>
                    <td><input type="text" value="" class="form-control border-input">
                    <span class="size-text-ex">例）　info@example.com</span>
                    </td>
                  
                </tr>
                <tr>
                    <td class="p-3 mb-2 bg-light text-black" data-id="33">郵便番号</td>
                    <td><input type="text" value="" class="form-control border-input"></td>
                </tr>
                <tr>
                    <td class="p-3 mb-2 bg-light text-black" data-id="44">住所</td>
                    <td><input type="text"3 value="" class="form-control border-input height-width-input">
                    <span class="size-text-ex">8 文字以上の半角英数字</span>
                    </td>
                </tr> 
                <tr>
                    <td class="p-3 mb-2 bg-light text-black" data-id="55">構成員</td>
                    <td><input type="text" value="" class="form-control border-input"></td>
                </tr>
                <tr>
                    <td class="p-3 mb-2 bg-light text-black" data-id="66">電話番号</td>
                    <td><input type="text" value="" class="form-control border-input height-width-input">
                    <span class="size-text-ex">※半角数字ハイフンなし</span>
                    </td>
                </tr>

            </tbody>
        </table>
        </div>
        </div>
    </div>
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-5 heading-section text-center ftco-animate" class="btn-login">
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