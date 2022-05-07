@extends('Layouts.CustomersHeader')
@section('content')

<div class="menus-main-container">

    <div class="menus-sections">
        <a href="#" class="menus-section">test</a>
        <a href="#" class="menus-section">test</a>
        <a href="#" class="menus-section">test</a>
        <a href="#" class="menus-section">test</a>
        <a href="#" class="menus-section">test</a>
        <a href="#" class="menus-section">test</a>
    </div>

    <div class="menu-items-container">
        <div class="menu-item">
            <div class="menu-item-img">
                <a href="#">
                    <img src="storage/images/machiato.jpg" alt="Espresso">
                </a>
            </div>
            <div class="menu-item-info">
                <div class="menu-title-price">
                    <p>Espresso</p>
                    <p>3500</p>
                </div>
                <p>A hot drink for a hot hoe</p>
            </div>
            <a href="" class="btn">ADD TO CART</a>
        </div>

        <div class="menu-item">
            <div class="menu-item-img">
                <a href="#">
                        <img src="storage/images/slide2.jpg" alt="That's HOT">
                </a>
            </div>
            <div class="menu-item-info">
                <div class="menu-title-price">
                    <p>Espresso</p>
                    <p>3500</p>
                </div>
                <p>A hot drink for a hot hoe</p>
            </div>
            <a href="" class="btn">ADD TO CART</a>
        </div>
    </div>
</div>


@endsection