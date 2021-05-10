@extends('public.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-4 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h4>令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 heading-section ftco-animate">
            <div class="line-form">2．連絡者</div>
        </div>
    </div>
    
    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-8 heading-section ftco-animate">
            <span>※日中連絡が確実に取れる責任者の役職名にチェックをし，詳細を下欄に記入してください。</span>
        </div> 
    </div>

    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-4 heading-section ftco-animate">
            <div class="table-responsive col-md-12">
                <table id="sort2" class="grid table table-bordered table-sortable table-register">
                    <tbody>
                        <tr>
                            <td data-id="11">
                                <div class="row">
                                    <div class="col-sm-7 col-7">責任者①</div>
                                    <div class="col-sm-5 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="22">
                                <div class="row">
                                    <div class="col-sm-7 col-7">
                                        <label class="form-check-label" for="inlineCheckbox1">役職名
                                            <input class="form-check-input ml-15" type="checkbox" id="inlineCheckbox1" value="option1">
                                        </label>
                                    </div>
                                    <div class="col-sm-5 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="33">
                                <div class="row">
                                    <div class="col-sm-7 col-7">氏名</div>
                                    <div class="col-sm-5 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="44">
                                <div class="row">
                                    <div class="col-sm-7 col-7">郵便番号</div>
                                    <div class="col-sm-5 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input width-70 inline-block">
                                <span class="size-text-ex pr-10">-</span>
                                <input type="text"  value="" class="form-control border-input height-width-input width-88 inline-block">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="55">
                                <div class="row">
                                    <div class="col-sm-7 col-7">住所</div>
                                    <div class="col-sm-5 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                                <span class="size-text-ex">※半角数字ハイフンなし</span>
                            </td>
                        </tr>
                        <tr>
                            <td data-id="66">
                                <div class="row">
                                    <div class="col-sm-7">電話番号</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="77">
                                <div class="row">
                                    <div class="col-sm-7">職業</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col-md-4 heading-section ftco-animate">
            <div class="table-responsive col-md-12">
                <table id="sort2" class="grid table table-bordered table-sortable table-register">
                    <tbody>
                        <tr>
                            <td data-id="11">
                                <div class="row">
                                    <div class="col-sm-7">責任者②</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="22">
                                <div class="row">
                                    <div class="col-sm-7">
                                       <label class="form-check-label" for="inlineCheckbox2">役職名
                                            <input class="form-check-input ml-15" type="checkbox" id="inlineCheckbox2" value="option2">
                                        </label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="33">
                                <div class="row">
                                    <div class="col-sm-7">氏名</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input width-70">
                    
                            </td>
                        </tr>
                        <tr>
                            <td data-id="44">
                                <div class="row">
                                    <div class="col-sm-7">郵便番号</div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input width-70 inline-block">
                                <span class="size-text-ex pr-10">-</span>
                                <input type="text"  value="" class="form-control border-input height-width-input width-88 inline-block">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="55">
                                <div class="row">
                                    <div class="col-sm-7">住所</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input inline-block">
                                <span class="size-text-ex pr-3">※半角数字ハイフンなし</span>
                            </td>
                        </tr>
                        <tr>
                            <td data-id="66">
                                <div class="row">
                                    <div class="col-sm-7">電話番号</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input inline-block">
                        </tr>
                        <tr>
                            <td data-id="77">
                                <div class="row">
                                    <div class="col-sm-7">職業</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input inline-block">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4 heading-section ftco-animate">
            <div class="table-responsive col-md-12">
                <table id="sort2" class="grid table table-bordered table-sortable table-register table-form-2">
                    <tbody>
                        <tr>
                            <td data-id="11">
                                <div class="row">
                                    <div class="col-sm-7">責任者③</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="22">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <label class="form-check-label" for="inlineCheckbox3">役職名
                                            <input class="form-check-input ml-15" type="checkbox" id="inlineCheckbox3" value="option3">
                                        </label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="33">
                                <div class="row">
                                    <div class="col-sm-7">氏名</div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input width-70 height-width-input">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="44">
                                <div class="row">
                                    <div class="col-sm-7">郵便番号</div>
                                </div>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control border-input height-width-input width-70 inline-block">
                                <span class="size-text-ex pr-10">-</span>
                                <input type="text"  value="" class="form-control border-input height-width-input width-88 inline-block">
                            </td>
                        </tr>
                        <tr>
                            <td data-id="55">
                                <div class="row">
                                    <div class="col-sm-7">住所</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input inline-block">
                            <span class="size-text-ex">※半角数字ハイフンなし</span></td>
                        </tr>
                        <tr>
                            <td data-id="66">
                                <div class="row">
                                    <div class="col-sm-7">電話番号</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                        </tr>
                        <tr>
                            <td data-id="77">
                                <div class="row">
                                    <div class="col-sm-7">職業</div>
                                </div>
                            </td>
                            <td><input type="text" value="" class="form-control border-input height-width-input">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-6 col-12 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-secondary">戻る</button>
            </div>
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-primary">一時保存</button>
            </div>
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-danger">次へ</button>
            </div>
        </div>
    </div>
         
</div>
@endsection