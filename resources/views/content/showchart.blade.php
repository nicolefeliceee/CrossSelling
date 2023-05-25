@section('css')
    <link rel="stylesheet" href="css/showchart.css">
@endsection

@extends('master')

@section('title', 'Show Chart Page')

@section('content')

    <div class="all-container">

        @include('partials.navbar')


        <div class="kanan-container">
            <div class="big-title-box">
                {{-- <span class="title-opacity">| All Year</span> --}}
                <h3 class="big-title">Show Chart </h3>
            </div>

            <div class="option-display-box">
                <button class="active">
                    <span>Amount Sales By Country</span>
                </button>

                <button>
                    <span>Top 50 Customers</span>
                </button>

                <button>
                    <span>Top 15 Products Sold</span>
                </button>

                <button>
                    <span>Top 15 The most Expensive</span>
                </button>

                <button>
                    <span>Top 15 The Cheapest</span>
                </button>



                {{-- <button class="option-display-2">
                    <h4 class="text-display-2">Amount Sales By Country</h4>
                </button>
                <button class="option-display-2 ">
                    <h3 class="text-display-2">Top 50 Customers</h3>
                </button>
                <button class="option-display-2">
                    <h4 class="text-display-2">Top 15 Products Sold</h4>
                </button>
                <button class="option-display-2">
                    <h4 class="text-display-2">Top 15 The most Expensive</h4>
                </button>
                <button class="option-display-2">
                    <h4 class="text-display-2">Top 15 The Cheapest</h4>
                </button> --}}
            </div>

            <div class="time-option-box">
                    <button class="time-allyear active ">
                        <span>All Year</span>
                        {{-- <h4 class="text-allyear">All Year</h4> --}}
                    </button>

                <span class="span-strip">
                    <h3 class="strip">|</h3>
                </span>

                <div class="option-month">
                    <span class="option-month">
                        <select name="month" id="month" class="time-month">
                            <option selected value="0">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </span>
                </div>

                <div class="option-year">
                    <span class="option-year">
                        <select name="month" id="year" class="time-year ">
                            <option selected value="0">Year</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                        </select>
                    </span> 
                </div>



                <!-- <div class="time-month">
                    <h4 class="month">Month<span class="dropdown"><img src="assets/dropdown.png" alt=""></span></h4>

                </div> -->
                <!-- <div class="time-year">
                    <h4 class="year">Year<span class="dropdown"><img src="assets/dropdown.png" alt=""></span></h4>
                </div> -->
            </div>

            <div class="box-barchart">
                <select name="barchart" id="barchart" class="barchart-option">
                    <option selected value="0">Bar Chart</option>
                    <option value="1">Pie Chart</option>
                    <option value="2">Line Chart</option>
                    <option value="2">Scatter Plot Chart</option>
                </select>
            </div>


            <div class="box-content">
                <div class="content">
                    <div class="image-content" >
                        {{-- <img src="assets/image/gambar.png" class="gambar" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
<script type="text/javascript" defer src="{{URL::asset('js/showchart.js')}}"></script>

@endsection
