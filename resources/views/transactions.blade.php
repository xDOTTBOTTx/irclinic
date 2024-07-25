
@extends('layouts.front')
@section('content')
<body>

    <!-- loader -->
    {{-- <div id="loader">
        <img src="/assets/front/img/loading-icon.png" alt="icon" class="loading-icon">
    </div> --}}
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="dashboard" class="headerButton goBack" style="font-size: 35px">
                
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            All Transactions
        </div>
        
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Today</div>
            <div class="transactions">
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Appolo Hospital</strong>
                            <p>Ramesh Singh</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 150</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h2.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Lilavati Hospital</strong>
                            <p>Kavya Joshi</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 29</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h3.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>BAPS</strong>
                            <p>Yash Mheta</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 1,000</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h4.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Civil Hospital</strong>
                            <p>Chandeashekhar M.</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 186</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Yesterday</div>
            <div class="transactions">
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h2.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Ahmedabad Civil Hospital</strong>
                            <p>Mukesh Ambani</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 8600</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h3.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Mhavir Hospital</strong>
                            <p>Devang patel</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 1600</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Sep 20, 2020</div>
            <div class="transactions">
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>P.P. Savani Hospital</strong>
                            <p>Ajay Rana</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 1200</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Sep 14, 2020</div>
            <div class="transactions">
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Appolo Hospital</strong>
                            <p>Ramesh Singh</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 1500</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h2.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Lilavati Hospital</strong>
                            <p>Kavya Joshi</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 1029</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h3.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>BAPS</strong>
                            <p>Yash Mheta</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 100</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="/doctor/transactiondetail" class="item">
                    <div class="detail">
                        <img src="<?php echo URL('/')?>/assets/front/img/h4.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Civil Hospital</strong>
                            <p>Chandeashekhar M.</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+ ₹ 18600</div>
                        <p>11-05-2024</p>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <div class="section mt-2 mb-2">
            <a href="#" class="btn btn-primary btn-block btn-lg">Load More</a>
        </div>


    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="/doctor/transactions" class="item active">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>Transaction</strong>
            </div>
        </a>
        {{-- <a href="app-pages.html" class="item">
            <div class="col">
                
            </div>
        </a> --}}
        <a href="dashboard" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Dashboard</strong>
            </div>
        </a>
        
        <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Add New Operation</strong>
            </div>
        </a>
    </div>
    @endsection