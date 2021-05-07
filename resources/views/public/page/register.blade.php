@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-1 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
            
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 heading-section ftco-animate">
            <p><span style="font-weight: bold;">利用者情報登録</span>
            <br>以下のフォームに必要事項をご入力ください。</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5 heading-section ftco-animate">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable">
            <tbody>
                <tr>
                    <td data-id="11">お名前</td>
                    <td><input type="text" value="" class="form-control border-input">
                        <p>例）　山田太郎</p>
                    </td>

                </tr>
                <tr>
                    <td data-id="22">メールアドレス（ID）</td>
                    <td><input type="email" value="" class="form-control border-input">
                    <p>例）　info@example.com</p>
                    </td>
                  
                </tr>
                <tr>
                    <td data-id="33">メールアドレス確認</td>
                    <td><input type="email" value="" class="form-control border-input"></td>
                </tr>
                <tr>
                    <td data-id="44">パスワード</td>
                    <td><input type="password"3 value="" class="form-control border-input">
                    8 文字以上の半角英数字
                    </td>
                </tr>
                <tr>
                    <td data-id="55">パスワード確認</td>
                    <td><input type="password" value="" class="form-control border-input"></td>
                </tr>
                <tr>
                    <td data-id="66">電話番号</td>
                    <td><input type="text" value="" class="form-control border-input">
                    ※半角数字
                    </td>
                </tr>

            </tbody>
        </table>
        </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-6 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">新規登録</button>
            </div>
        </div>
    </div>

</div>
@endsection