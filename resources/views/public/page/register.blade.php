@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-6 heading-section ftco-animate">
            <p><span style="font-weight: bold;">利用者情報登録</span>
            <br>以下のフォームに必要事項をご入力ください。</p>
        </div>
    </div>


    <form action="">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 heading-section ftco-animate">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable table-register">
            <tbody>
                <tr>
                    <td data-id="11">
                        <div class="row">
                            <div class="col-sm-9 col-7">お名前</div>
                            <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                        </div>
                    </td>
                    <td><input type="text" required value="" class="form-control border-input height-width-input">
                    <span class="size-text-ex">例）　山田太郎</span>
                    </td>

                </tr>
                <tr>
                    <td data-id="22">
                        <div class="row">
                            <div class="col-sm-9 col-7">メールアドレス（ID）</div>
                            <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                        </div></td>
                    <td><input type="email" required value="" class="form-control border-input height-width-input">
                    <span class="size-text-ex">例）　info@example.com</span>
                    </td>
                </tr>
                <tr>
                    <td data-id="33">
                    <div class="row">
                            <div class="col-sm-9 col-7">メールアドレス確認</div>
                            <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                        </div></td>
                    <td><input type="email" required value="" class="form-control border-input height-width-input"></td>
                </tr>
                <tr>
                    <td data-id="44">
                    <div class="row">
                            <div class="col-sm-9 col-7">パスワード</div>
                            <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                        </div></td>
                    <td><input type="password" required value="" class="form-control border-input height-width-input">
                    <span class="size-text-ex">8 文字以上の半角英数字</span>
                    </td>
                </tr>
                <tr>
                    <td data-id="55">
                    <div class="row">
                            <div class="col-sm-9 col-7">パスワード確認</div>
                            <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                        </div></td>
                    <td><input type="password"  required value="" class="form-control border-input height-width-input"></td>
                </tr>
                <tr>
                    <td data-id="66">
                    <div class="row">
                            <div class="col-sm-9 col-7">電話番号</div>
                            <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                        </div></td>
                    <td><input type="text" required class="form-control border-input height-width-input">
                    <span class="size-text-ex">※半角数字</span>
                    </td>
                </tr>

            </tbody>
        </table>
        </div>
        </div>
    </div>
    <div class="row justify-content-center pb-1 mb-3 mt-3">
        <div class="col-md-6 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-common" role="group">
                <button type="submit" class="btn btn-primary">新規登録</button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection