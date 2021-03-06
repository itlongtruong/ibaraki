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
            <div class="line-form">4．助成対象事業</div>
            <span>以下のフォームに必要事項をご入力ください。</span>
        </div>
    </div>

    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-6 heading-section ftco-animate">
            <div class="table-responsive col-md-12">
                <table id="sort2" class="grid table table-bordered table-sortable table-register table-form-common">
                    <tbody>
                        <tr>
                            <td data-id="11">
                                <div class="row">
                                    <div class="col-sm-9 col-7">事業名</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td><input type="text" required class="form-control border-input height-width-input">
                            <span class="size-text-ex">例）　〇〇団体</span>
                            </td>

                        </tr>
                        <tr>
                            <td data-id="22">
                                <div class="row">
                                    <div class="col-sm-9 col-7">実施予定期</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div></td>
                            <td>
                            <input type="text" value="" class="form-control border-input height-width-input width-70 inline-block">
                                <span class="size-text-ex pr-3">年</span>
                                <input type="text"  value="" class="form-control border-input height-width-input width-40 inline-block">
                                <span class="size-text-ex pr-3">月</span>
                                <input type="text"  value="" class="form-control border-input height-width-input width-40 inline-block">
                                <span class="size-text-ex pr-3">日</span>
                            </td>
                        
                        </tr>
                        <tr>
                            <td data-id="33">
                            <div class="row">
                                    <div class="col-sm-9 col-7">実施予定地</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div></td>
                            <td>
                            
                            <input type="text" required class="form-control border-input height-width-input">
                    
                            </td>
                        </tr>
                        <tr>
                            <td data-id="44">
                                <div class="row">
                                    <div class="col-sm-9 col-7">開催予定場所</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td><input type="text" required class="form-control border-input height-width-input">
                
                            </td>
                        </tr>
                        <tr>
                            <td data-id="55">
                            <div class="row">
                                    <div class="col-sm-9 col-7">入場者数（予定）</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div></td>
                            <td><input type="text" required class="form-control border-input height-width-input width-70 inline-block">
                            <span class="size-text-ex pr-3">名</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col-md-6 heading-section ftco-animate">
            <div class="table-responsive col-md-12">
                <table id="sort2" class="grid table table-bordered table-sortable table-form-4 table-register">
                    <tbody>
                        <tr>
                            <td data-id="11">
                                <div class="row">
                                    <div class="col-sm-9 col-7">事業費総額</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td><input type="text" required class="form-control border-input height-width-input width-158 inline-block">
                            <span class="size-text-ex pr-3">円</span></td>

                        </tr>
                        <tr>
                            <td data-id="22">
                                <div class="row">
                                    <div class="col-sm-9 col-7">助成対象経費</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div></td>
                                <td><input type="text" required class="form-control border-input height-width-input width-158 inline-block">
                            <span class="size-text-ex pr-3">円</span></td>
                        
                        </tr>
                        <tr>
                            <td data-id="33">
                            <div class="row">
                                    <div class="col-sm-9 col-7">助成希望額</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div></td>
                                <td><input type="text" required class="form-control border-input height-width-input width-158 inline-block">
                            <span class="size-text-ex pr-3">円</span></td>
                        </tr>
                        <tr>
                            <td data-id="44">
                                <div class="row">
                                    <div class="col-sm-9 col-7">他の補助金等の有無</div>
                                    <div class="col-sm-3 col-5"><span class="required">必須</span></div>
                                </div>
                            </td>
                            <td>
                                <div class="form-check-inline">
                                <input class="form-check-input border-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    有
                                </label>
                                </div>
                                <div class="form-check-inline">
                                <input class="form-check-input border-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    無
                                </label>
                                </div>
                                <div class="form-check-inline">
                                <input class="form-check-input border-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    未定
                                </label>
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
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-secondary">戻る</button>
            </div>
            <div class="btn-group btn-common " role="group">
                <button type="button" class="btn btn-primary">一時保存</button>
            </div>
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-danger">次へ</button>
            </div>
        </div>
    </div>
         
</div>
@endsection