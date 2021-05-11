@extends('public.layouts.master-index')
@section('content')
<div class="container">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 col-sm-12 heading-section text-center ftco-animate">
        <h3>令和 3 年度<br>文化活動事業費助成対象事業<br>募集案内</h3>
        </div>
     </div> 
     <div class="row justify-content-center">   
        <div class="col-md-7 col-sm-12 heading-section text-center ftco-animate">
        <p>茨城県内各地における自主的で個性的な文化活動を行なっている
        <br>団体または個人の発表活動の事業費一部に対して助成します。</p>
        </div>
    </div> 
     <div class="row justify-content-center"> 
        <div class="col-md-7 col-sm-12 heading-section text-center ftco-animate">
        <div class="rotate"><img src="source/image/rotate.png" alt=""></div>
        </div>
    </div> 
     <div class="row justify-content-center pb-2 mb-3">     
        <div class="col-md-7 col-sm-12 heading-section text-center ftco-animate">
            <div class="btn-group btn-register-login">
                <a href="{{ url('login')}}" class="btn btn-primary">申請はこちら</a>
            </div>
        </div>
    </div>
</div>
@endsection