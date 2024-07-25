@extends('layouts.front')
@section('content')

<body class="bg-white">

    <!-- loader -->
    {{-- <div id="loader">
        <img src="/assets/images/hospitalimages/ir-logo.png" alt="icon" class="loading-icon">
    </div> --}}
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="dashboard" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Transaction Detail
        </div>
        {{-- <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#DialogBasic">
                <ion-icon name="trash-outline"></ion-icon>
            </a>
        </div> --}}
    </div>
    <!-- * App Header -->

    <!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
                        <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">DELETE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic -->

    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section mt-2 mb-2">


            <div class="listed-detail mt-3">
                <div class="icon-wrapper">
                    
                        <img src="<?php echo URL('/'); ?>/assets/front/img/h2.jpg" alt="img" class="image-block imaged w48">

                    
                </div>
                <h3 class="text-center mt-2">Appolo Hospital</h3>
            </div>

            <ul class="listview flush transparent simple-listview no-space mt-3">
                <li>
                    <strong>Status</strong>
                    <span class="text-success">Success</span>
                </li>
                <li>
                    <strong>Hospital Name</strong>
                    <span>Appolo Hospital</span>
                </li>
                <li>
                    <strong>Patient Name</strong>
                    <span>Ramesh Singh</span>
                </li>
                <li>
                    <strong>Operation</strong>
                    <span>Apendics</span>
                </li>
                
                <li>
                    <strong>Operation Date</strong>
                    <span>Sep 25, 2020 10:45 AM</span>
                </li>
                <li>
                    <strong>Added Date</strong>
                    <span>Oct 21,2020 04.00 PM</span>
                </li>
                <li>
                    <strong>Amount</strong>
                    <h3 class="text-success">₹ 2400</h3>
                </li>
            </ul>


        </div>

    </div>
    
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