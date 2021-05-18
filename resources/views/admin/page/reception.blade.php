@extends('admin.layouts.master')
@section('content')
<div class="col-xl-10 col-lg-9 col-md-9">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="heading-section ftco-animate">
            <p>管理者メニュー/申請内容一覧</p>
            </div>
        </div>
        <div class="row justify-content-center pb-2 mb-3">
            <div class="heading-section ftco-animate">
                <div id="form-search">
                    <div class="row justify-content-center pb-2 mb-3 btn-form-search">
                        <div class="col-md-10 heading-section text-center ftco-animate" class="btn-login">
                            <div class="btn-group btn-common-admin width-169" role="group">
                                <button type="button" class="btn btn-secondary width-170">探索 <i class="fa fa-search"></i></button>
                            </div>
                            <div class="btn-group btn-common-admin width-169" role="group">
                                <button type="button" class="btn btn-secondary width-170">検索項目リセット</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row justify-content-center pb-2 mb-3">
        <div class="heading-section ftco-animate">
             <div class="table-responsive">
                <table class="table table-bordered table-reception">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col" nowrap>団体名</th>
                    <th scope="col" nowrap>発足年月日</th>
                    <th scope="col" nowrap>郵便番号</th>
                    <th class="td_size" scope="col" nowrap>住所</th>
                    <th scope="col" nowrap>電話番号</th>
                    <th scope="col" nowrap>ステータス</th>
                    <th scope="col" nowrap>詳細</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td nowrap>test</td>
                    <td nowrap>yyyy/mm/dd</td>
                    <td nowrap>000-0000</td>
                    <td  class="td_size" nowrap>testtest</td>
                    <td nowrap>00-000-000</td>
                    <td nowrap>test</td>
                    <td class="link-detail" nowrap><a href="#">詳細</a></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td nowrap>test</td>
                    <td nowrap>yyyy/mm/dd</td>
                    <td nowrap>000-0000</td>
                    <td nowrap>testtest</td>
                    <td nowrap>00-000-000</td>
                    <td nowrap>test</td>
                    <td class="link-detail" nowrap><a href="#">詳細</a></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td nowrap>test</td>
                    <td nowrap>yyyy/mm/dd</td>
                    <td nowrap>000-0000</td>
                    <td nowrap>testtest</td>
                    <td nowrap>00-000-000</td>
                    <td nowrap>test</td>
                    <td class="link-detail" nowrap><a href="#">詳細</a></td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td nowrap>test</td>
                    <td nowrap>yyyy/mm/dd</td>
                    <td nowrap>000-0000</td>
                    <td nowrap>testtest</td>
                    <td nowrap>00-000-000</td>
                    <td nowrap>test</td>
                    <td class="link-detail" nowrap><a href="#">詳細</a></td>
                    </tr>
                </tbody>
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection