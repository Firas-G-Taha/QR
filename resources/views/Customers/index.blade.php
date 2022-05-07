@extends('layouts.CustomersHeader')
@section('content')
{{-- Events slideshow --}}
<div class="homepage-container">

    <div class="slideshow-container">
        <div class="events fade">
            <img src="storage/images/slide2.jpg" alt="That's HOT">
        </div>
        <div class="events fade">
    
            <img src="{{ asset('storage/images/vigtables.jpg') }}">
    
        </div>
        <div class="events fade">
    
            <img src="{{ asset('storage/images/tomato.jpg') }}">
    
        </div>
        <div class="events fade">
    
            <img src="{{ asset('storage/images/vigtables.jpg') }}" >
    
        </div>
        <div style="text-align:center; margin:-5vh;">
    
            {{-- dots number is the sasme of images number --}}
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
    
        </div>
        <div class="events-arrows">
            <a class="prev" onclick="prevSlide('events')">&#10094;</a>
            <a class="next" onclick="showSlides('events')">&#10095;</a>
        </div>
    </div>
   
    {{-- Sections --}}
    <div class="homepage-sections-container">
        
        <div class="homepage-section">
            <div class="homepage-section-img">
                <img src="storage/images/slide2.jpg" alt="That's HOT">
            </div>
            <div class="homepage-section-text">
                <div class="homepage-section-title">
                    <h1>Hot Bevrages</h1>
                    <hr>
                </div>
                <a href="" class="btn">Hot Menue</a>
            </div>
        </div>

        <div class="homepage-section">
            <div class="homepage-section-img">
                <img src="storage/images/cold.jpg" alt="That's HOT">
            </div>
            <div class="homepage-section-text">
                <div class="homepage-section-title">
                    <h1>cold Bevrages</h1>
                    <hr>
                </div>
                <a href="" class="btn">cold Menue</a>
            </div>
        </div>

        <div class="homepage-section">
            <div class="homepage-section-img">
                <img src="storage/images/food.jpg" alt="That's HOT">
            </div>
            <div class="homepage-section-text">
                <div class="homepage-section-title">
                    <h1>FOOD</h1>
                    <hr>
                </div>
                <a href="" class="btn">food Menue</a>
            </div>
        </div>

    </div>

    {{-- Offers slideshow --}}
    <div class="slideshow-container">
        <div class="offers ">
            <a href="">
                <img src="{{ asset('storage/images/Beef.jfif') }}">
            </a>
        </div>
        <div class="offers ">
    
            <img src="{{ asset('storage/images/vigtables.jpg') }}" ">
    
        </div>
        <div class="offers ">
    
            <img src="{{ asset('storage/images/tomato.jpg') }}">
    
        </div>
        <div class="offers ">
    
            <img src="{{ asset('storage/images/vigtables.jpg') }}" >
    
        </div>
        <div class="offers-arrows">
            <a class="prev" onclick="prevSlide('offers')">&#10094;</a>
            <a class="next" onclick="showSlides('offers')">&#10095;</a>
        </div>
        <div class="offer-text">
            <h1>it's a random description for the offer</h1>
        </div>
        <div class="offer-btn">
            <a href="" class="btn">Order</a>
        </div>

    </div>
</div>
@endsection