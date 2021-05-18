@extends('admin.layouts.master')
@section('content')
<div class="col-xl-10 col-lg-9 col-md-9">
    <div class="container">
        <div class="row justify-content-center pb-2 mb-3">
            <div id="admin-form-confirm" class="heading-section ftco-animate">
            <p>ユーザーの申請画と同じ</p>   
            </div>
        </div>
        <div class="row justify-content-center pb-2 mb-3">
            <div class="heading-section text-center ftco-animate" class="btn-login">
                <div class="btn-group btn-common" role="group">
                    <button type="button" class="btn btn-primary">承認</button>
                </div>
                <div class="btn-group btn-common" role="group">
                    <button type="button" class="btn btn-danger">却下</button>
                </div>
                <div class="btn-group btn-common" role="group">
                    <button type="submit" class="btn btn-outline-primary">キャンセル</button>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection