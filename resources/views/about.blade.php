@extends('layouts.main')
@section('title')
    About Us
@endsection
@section('content')



<!--ABOUT US TOP AREA START-->
<section class="about-us-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-heading">
                    <h3>ABOUT US</h3>
                    <p>The company was registered in August 1994 and started operation in October same year. It was established by pharm Audu Garba Innocent, after graduating from pharmacy school with little entrepreneurial experience and finance.
                        However, the company has witness tremendous growth in all areas of it’s            operation, making it a house hold to it’s customers.
                        Dollar Pharmacy Ltd by all standards represents a reference point to any intending entrepreneur in Nigeria with limited working capital.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--ABOUT US TOP AREA END-->

<!--ABOUT US TESTIMONIAL AREA START-->
<div class="about-us-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="client-quote"> <h3>OUR VISION</h3>
                    <p class="description">To be established among the leading pharmaceutical companies in Nigeria through innovation, continuous learning and adaptation, emerging ideas and skills in the industry.</p>
                    <p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="client-quote"> <h3>OUR MISSION</h3>
                    <p class="description">Provision of professional services and high quality products in accordance to ethical and regulatory specification.</p>
                    <p> </p> <br>
                </div>
            </div>


        </div>

            <div class="col-6 col-offset-2" style="margin-top: 15px;">
                <div class="client-quote"> <h3>CORE VALUES</h3>
                    <p class="description">Our vision and mission are driven on the following values</p>
                    <p>
                    <ul>
                        <li>Continuous learning</li>
                        <li>Quality products and services </li>
                        <li>Transparency and accountability  </li>
                        <li>Stake holder satisfaction </li>

                    </ul>
                    </p>
                    <p> </p> <br>
                </div>
            </div>

    </div>
</div>
<!--ABOUT US TESTIMONIAL AREA END-->

<!--ABOUT US TEAM AREA START-->
<section class="about-team-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-heading text-center">
                    <h3>Our Key Staff</h3>
                    <p>Our team of expert will work side by side to offer the best solution.</p>
		    <p>
                     <ul>
                        <li>Pharm Audu Garba Innocent</li>
                        <li>Pharm Abdulrasheed Ibrahim </li>
                        <li>Pharm Uzowuaka Christian Chidi  </li>
                        <li>Pharm Peter Onuarah </li>
                        <li>Mr Igono Noah (SCHEW) </li>
                        <li>Mr Jerome Anjishi (SCHEW) </li>
                        <li>Mr Balogun Lucky (Accountant) </li>
                        <li>Bar Rebeca Otoupele(Secretary) </li>
                        <li>Mr Onah Andrew Inalegwu(IT) </li>
                        <li>Mr Allan Nwali(Operations Manager) </li>

                    </ul>
                    </p>
                </div>
                {{--@foreach($staffs as $staff)--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--<div class="team-item">--}}
                        {{--<div class="team-thumb">--}}
                            {{--<img src="img/team-1.jpg" alt="">--}}
                            {{--<div class="team-overlay"></div>--}}
                            {{--<div class="soc-link">--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-instagram"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="team-content">--}}
                            {{--<span>{{$staff->title}}</span>--}}
                            {{--<h5>{{$staff->description}}</h5>--}}
                        {{--</div>--}}


                    {{--</div>--}}
                {{--</div>--}}
                {{--@endforeach--}}



            </div>
        </div>
    </div>
</section>
<!--ABOUT US TEAM AREA END-->
@endsection