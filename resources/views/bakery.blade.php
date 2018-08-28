@extends('layouts.main')
@section('title')
    Restaurant & Bakery
@endsection
@section('css')
<style type="text/css">

</style>
@stop

@section('content')

<div class="about-team-area">
    <div class="container">
        {{-- <div class="row">
            <h1>NEW OBSERVATIONS</h1>
            <ol>
                <li>Product Review: User/customers should be able to add product review via
                    <ul>
                        <li>Review comment</li>
                        <li>Star rating</li>
                    </ul>
                </li>
                <li>Update spelling of Product Information �Product Infomation�</li>
                <li>Product Stock status: Should be able to update when a product is out of stock</li>
                <li>Product share via social media: Remove other social media icon for product share except for Facebook and Twitter</li>
                <li>Social Media Accounts Handles at the Footer �Follow Us�</li>
                <li>Restaurant & Bakery: </li>
            </ol>

        </div> --}}

        <div class="row">
            <h3 class="text-center">ENJOY VARIETIES OF MEALS FROM OUR RESTAURANT & BAKERY</h3><br />

            <div class="col-md-3 ">
                <img src="{{URL::to('assets/img/slider/baked_bread.jpg')}}" style="height:300px;"><span>&nbsp;&nbsp;&nbsp;</span>
                <p class="text-center"><strong>Baked Bread</strong></p>
                <p class="text-center">We make provisions for fresh breads from our bakery and other special bakeries in town just to meet your delightful needs</p>
            </div>


            <div class="col-md-3">
                <img src="{{URL::to('assets/img/slider/baked_bread1.jpg')}}" style="height:300px;"><span>&nbsp;&nbsp;&nbsp;</span>
                <p class="text-center"><strong>Cakes, Cup Cakes and Pastries</strong></p>
                <p class="text-center">We make fresh varieties of cakes and pastries just for you. We ensure they are fresh just for the special cake and pastries lovers </p>
            </div>


            <div class="col-md-3">
                <img src="{{URL::to('assets/img/slider/baked_bread4.jpg')}}" style="height:300px;"><span>&nbsp;&nbsp;&nbsp;</span>
                <p class="text-center"><strong>Sandwiches, Nuts, Fruits etc.s</strong></p>
                <p class="text-center">Come and enjoy varieties of sandwiches, selected dry nuts and fresh fruits well prepared and packaged for your needs </p>
            </div>
            <div class="col-md-3">
                <img src="{{URL::to('assets/img/slider/baked_bread3.jpg')}}" style="height:300px;"><span>&nbsp;&nbsp;&nbsp;</span>
                <p class="text-center"><strong>Meals on the go</strong></p>
                <p class="text-center">We provide varieties of homemade meals for you to enjoy on the go or at the comfort of our splendid restaurant </p>
            </div>
        </div>


    </div>
</div>

@endsection

@section('script')
<script>
</script>
@stop