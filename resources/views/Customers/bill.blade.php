@extends('Layouts.CustomersHeader')
@section('content')

{{-- delete from here --}}
<div class="slideshow2-container">
    <div class="events2 ">
        <img src="storage/images/slide2.jpg" alt="That's HOT">
    </div>
    <div class="events2">

        <img src="{{ asset('storage/images/vigtables.jpg') }}">

    </div>
    <div class="events2">

        <img src="{{ asset('storage/images/tomato.jpg') }}">

    </div>
    <div style="text-align:center; margin:-5vh;">

        {{-- dots number is the sasme of images number --}}
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>

    </div>
    <div class="events-arrows">
        <a class="prev" onclick="prevSlide('events')">&#10094;</a>
        <a class="next" onclick="showSlides('events')">&#10095;</a>
    </div>
</div>
{{-- delete to here --}}
{{-- <div class="center-chiled">
    <div class="popup-container bill-container">
        <div class="margin-b-20">
            <h2>الفاتورة</h2>
        </div>
        <table class="bill-table">
            <tr>
                <th>العنصر</th>
                <th>السعر</th>
                <th>العدد</th>
                <th>المجموع</th>
            </tr>
            <tr>
                <td>كريستال ميث</td>
                <td>9.99$</td>
                <td>24</td>
                <td>239.76$</td>
            </tr>
            <tr>
                <td>سمبوسك</td>
                <td>2$</td>
                <td>100</td>
                <td>200$</td>
            </tr>
        </table>
        <a href="" class="pop-btn">طلب الحساب</a>

    </div>    
</div> --}}
@endsection