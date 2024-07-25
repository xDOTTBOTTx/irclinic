@extends('layouts.front')
@section('content')
<style>
    .nb {
    border: 2px solid #2bafbc;
    background-color: #2bafbc;
    border-radius: 0.9em;
    padding: 8px;
    opacity: 70%;
    color:white;
    transition: all ease-in-out 0.2s;
    font-size: 16px;
    
}
.nb:hover{
    color:white;

}


.functiondesign{
    padding-top: 10px;
}
#savebutton{
    background-color: #2bafbc;
    color: white;
}
    </style>
<body>

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
            Add New Operation
        </div>
        
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        
                        <form action="post" action="/newoperation">
                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="hospitalname">Hospital Name</label>
                                    <select class="form-control custom-select" id="equipment">
                                        <option value="" disabled selected>Hospital name</option>
                                        <option value="h1">appolo</option>
                                        <option value="h2">lilavati</option>
                                        
                                    </select>                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="patientname">Patient Name</label>
                                    <input type="text" class="form-control" id="name2" placeholder="Patient Name">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="operation">Operation For</label>
                                    <input type="text" class="form-control" id="name2" placeholder="Operation For">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="date">Date</label>
                                    <input type="date" class="form-control" id="date" >
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="charge">Charge</label>
                                    <input type="text" class="form-control" id="name2" placeholder="Charge">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <div id="addotherequipment">
                                    
                                            
                                                <div class="row">
                                                <div class="col-10">
                                                    <label class="label" for="equipment">Equipment</label>
                                                    <select class="form-control custom-select" id="account1">
                                                        <option value="" disabled selected>Equipment</option>
                                                        <option value="h1">Pacemaker</option>
                                                        <option value="h2">Syringe</option>
                                                        
                                                    </select>                                              <i class="clear-input">
                                                <a name="close-circle"></a>
                                            </i>
                                                </div>
                                                <div class="col-2">

                                                    <button type="button" id="savebutton" class="btn btn-lg btn-block"  onclick="addMilestone()">Add More</button>

                                                            
                                                
                                                </div>
                                            
                                    
                                        
                                </div>
                                
                                
                                    
                                </div>
                            </div>
                            

                            

                            <div class="mt-2">
                                <button type="button" id="savebutton" class="btn btn-lg btn-block">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        



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
        <a href="dashboard" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Dashboard</strong>
            </div>
        </a>
        
        <a href="#" class="item active" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Add New Operation</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    
    <script>
    

    function addMilestone() {
		
			

		
			$("#addotherequipment").append(
				`<div id="addotherequipment">
                                    
                                                <div class="functiondesign">
                                                <div class="row">
                                                <div class="col-10">
                                                    <label class="label" for="equipment">Equipment</label>
                                                    <select class="form-control custom-select" id="equipment">
                                                        <option value="" disabled selected>Equipment</option>
                                                        <option value="h1">Pacemaker</option>
                                                        <option value="h2">Syringe</option>
                                                        
                                                    </select>                                               <i class="clear-input">
                                                <a name="close-circle"></a>
                                            </i>
                                                </div>
                                            
                                                
                                                </div>
                                                </div>
                                            
                                    
                                        
                                </div>`
			);
		}
	
    

    </script>
@endsection

