@extends('public.layouts.master-index')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <h3>令和 3 年度<br>文化活動事業費助成対象事業<br>募集案内</h3>
        </div>
        <div class="col-md-7 heading-section text-center ftco-animate">
        <p>茨城県内各地における自主的で個性的な文化活動を行なっている
        <br>団体または個人の発表活動の事業費一部に対して助成します。</p>
        </div>

        <div class="col-md-7 heading-section text-center ftco-animate">
        <div class="rotate">&#8768;</div>
        </div>
        <div class="col-md-7 heading-section text-center ftco-animate">
            <div class="btn-group btn-register-login">
                <a href="{{ url('login')}}" class="btn btn-primary">申請はこちら</a>
            </div>
        </div>
    </div>
</div>
@endsection