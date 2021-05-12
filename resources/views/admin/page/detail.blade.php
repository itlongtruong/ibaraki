@extends('admin.layouts.master')
@section('content')
<div class="col-xl-10 col-lg-9 col-md-9">
<div class="container">
<div class="row justify-content-center pb-2 mb-3">
    <div class="col-lg-11 col-md-11 col-sm-12 heading-section ftco-animate">
        <div id="admin-form-confirm">
        <p>ユーザーの申請画と同じ</p>   
        </div>
    </div>
</div>
<div class="row justify-content-center pb-2 mb-3">
        <div class="col-md-6 heading-section text-center ftco-animate" class="btn-login">
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-primary">承認</button>
            </div>
            <div class="btn-group btn-common" role="group">
                <button type="button" class="btn btn-danger">却下</button>
            </div>
        </div>
</div> 
</div>
</div>
@endsection