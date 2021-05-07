@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-4 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-4 heading-section ftco-animate">
            <div class="line-form">5．添付ファイル</div>
            <span>以下のフォームに必要事項をご入力ください。</span>
        </div>
        
    </div>

    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-9 heading-section ftco-animate">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable">
            <tbody>
                <tr>
                    <td data-id="11">（１）助成対象事業の実施計画（付表 1）</td>
                    <td>
                    <div id="attachment">
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                    </div>
                    </td>

                </tr>
                <tr>
                    <td data-id="22">（２）助成対象事業収支予算書（付表 2）</td>
                    <td>
                    <div id="attachment">
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td data-id="33">（３）過去の決算書</td>
                    <td>
                    <div id="attachment">
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td data-id="44">（４）団体の会則及び会員名簿</td>
                    <td>
                    <div id="attachment">
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td data-id="55">（５）その他の参考書類</td>
                    <td>
                    <div id="attachment">
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                        <label><input type="file" name="ファイル添付" class="fileinput">ファイルを添付する</label>
                        <span class="filename"></span>
                    </div>
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
                <button type="button" class="btn btn-secondary">戻る</button>
            </div>
            <div class="btn-group btn-login-cancel" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">一時保存</button>
            </div>
            <div class="btn-group btn-login-cancel " role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-danger">次へ</button>
            </div>
        </div>
    </div>
         
</div>
@endsection