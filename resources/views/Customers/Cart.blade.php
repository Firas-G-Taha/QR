@extends('Layouts.CustomersHeader')
@section('content')

    <div class="cart-main-container">
        <div></div>
        <div class="cart-item">
            <div class="cart-img-title">
                <div class="cart-img">
                    <img src="storage/images/machiato.jpg" alt="">
                </div>
                
                <div class="cart-title-subprice">
                    <h2>Sex on the beach</h2>
                    <p>2300</p>
                </div>
                
            </div>
            <div class="cart-input-price">
                <div class="cart-input-container">
                    <div class="input-btn">-</div>
                    <input type="number" min=0 >
                    <div class="input-btn">+</div>
                </div>
                <p>23000<p>
            </div>

        </div>
    </div>
@endsection