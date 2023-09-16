@extends('layouts.master')
@section('title', 'Home')

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>



<style>
    .site-footer {
        display: none;
    }
    .images{
          width: 80%;
    }
    form{
          border: 1px solid #999;
          box-shadow: 20px 10px 10px #999;
          width: 75%;
          margin: auto;
    }
    .payment{
          margin:100px auto 0 auto;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          align-items: center;
          height: 100vh;
    }
</style>


@section('content')

    <div class="container">
        <div class="row justify-content-center payment">
            <div class="col-lg-6">
                                       
                <form action="paypal/{{$product->id}}" method="POST" class="p-5 rounded donation-form " data-aos="fade-up">
                    @csrf
                    <div class="text-center mb-4">
                        <img src="{{url('../images/paypal.webp')}}" alt="PayPal Logo" class="images">

                    </div>
                    <div class="input-group mb-3">
                        <input type="text" placeholder="0.00" class="form-control" id="cont" name="price"
                        max-value="{{ old('price') }}" max="55555" required>
                    </div>
                    <input type="hidden" name="difference" value="{{ $difference }}">

                    {{-- @dd(session()->all()); --}}
                    <p>the donate will be less or equla <strong>{{
                     $product->total - session('totalsproduct') }}$</strong> </p>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #54ac75;">Pay with
                        PayPal</button>
                         @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

                </form>
            </div>
            <div class="col-lg-6">
                <form action="stripe/{{$product->id}}" method="post" class="p-5 rounded donation-form" style="padding: 0px 50px;">
                    @csrf
                    <div class="text-center mb-4">
                        <img src="{{url('../images/visa.png')}}" alt="Visa Logo"class="images" >

                    </div>
                    <div class="input-group mb-3">
                        <input type="text" placeholder="0.00" class="form-control" name="price"
                            value="{{ old('price') }}" required>
                    </div>
                    <input type="hidden" name="difference" value="{{ $difference }}">
                        <p>the donate will be less or equla <strong>{{
                     $product->total - session('totalsproduct') }}$</strong> </p>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #54ac75;">Pay with
                        Visa</button>
                        @if(session('error'))
    <div class="alert alert-danger" style="">
        {{ session('error1') }}
    </div>
@endif
                </form>
            </div>
        </div>
    </div>


@endsection
