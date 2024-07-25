@extends('layouts.front')
@section('content')

<body>

    <!-- loader -->
    {{-- <div id="loader">
        <img src="<?php echo URL('/')?>/assets/images/hospitalimages/ir-logo.png" alt="icon" class="loading-icon">
    </div> --}}
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader" >
        <div class="left" >
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div >
            <img src="<?php echo URL('/')?>/assets/images/hospitalimages/ir-logo.png" height="60px" width="60px" alt="logo" class="logo">
        </div>
        <div class="right">
            <a href="#" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                {{-- <span class="badge badge-danger">4</span> --}}
            </a>
            <a href="#" class="headerButton">
                <img src="<?php echo URL('/')?>/assets/front/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
                {{-- <span class="badge badge-danger">6</span> --}}
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule" >

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card" >
                <!-- Balance -->
                <div class="balance" >
                    <div class="left">
                        <span class="title">Total Collection(This month)</span>
                        <h1 class="total text-success">₹ 2,5628</h1>
                    </div>
                    
                    
                
                    <!-- Balance -->
                    
                </div>   
                <div class="balance">
                    <div class="left">
                        <span class="title">Total Operations(This month)</span>
                        <h1 class="total"> 29</h1>
                    </div>
                    <div class="right">
                        <a href="/doctor/newoperation" class="button">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <!-- Wallet Card -->

        <!-- Deposit Action Sheet -->
        
        

        <!-- Stats -->
        <div class="section" >
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Today's Collection</div>
                        <div class="value text-success">₹ 55200</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Today's Operation</div>
                        <div class="value text-danger">2</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Equ. Used Today</div>
                        <div class="value">16</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Hospital Visit Today</div>
                        <div class="value">4</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Stats -->

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Today's Transactions</h2>
                <a href="/doctor/transactions" class="link">View All</a>
            </div>
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

        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright © IR Clinic 2024. All Rights Reserved.
            </div>
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="/doctor/transactions" class="item">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>Transaction</strong>
            </div>
        </a>
        {{-- <a href="app-pages.html" class="item">
            <div class="col">
                
            </div>
        </a> --}}
        <a href="dashboard" class="item active" >
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Dashboard</strong>
            </div>
        </a>
        
        <a href="/doctor/newoperation" class="item">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Add New Operation</strong>
            </div>
        </a>
        {{-- <a href="app-settings.html" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a> --}}
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper">
                            <img src="<?php echo URL('/')?>/assets/front/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                        </div>
                        <div class="in">
                            <strong>Paresh Patel</strong>
                            <div class="text-muted">25897</div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                    <!-- balance -->
                    <div class="sidebar-balance">
                        <div class="listview-title">Total Collection</div>
                        <div class="in">
                            <h1 class="amount">₹ 2,562.50</h1>
                        </div>
                    </div>
                    
                    <!-- menu -->
                    <div class="listview-title mt-1">Menu</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="dashboard" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="pie-chart-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Dashboard
                                    {{-- <span class="badge badge-primary">10</span> --}}
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="newoperation" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="document-text-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Operation
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="transactions" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Transactions
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                    

                </div>
            </div>
        </div>
    </div>
    
    @endsection

    