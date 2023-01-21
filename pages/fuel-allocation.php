<div style="display: none" id="fuel-allocation-page" class="row">
    <div class="col-lg-12 col-xl-12 mt-3">
        <div class="card shadow">
            <div class="card-header py-3 d-flex justify-content-between">
                <p class="text-primary m-0 font-weight-bold">Fuel Allocations</p>
                <img class="request-fuel-modal-pop" src="./imgs/icons8-add-30.png" alt="add">
            </div>
            <div class="card-body">
                <div style="height:200px; overflow-y:auto;" class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                    <div class="table-outter-frame">
                        <table class="table my-0" id="dataTable">
                            <thead>
                            <tr>
                                <th>Req.Date</th>
                                <th>Fuel Type</th>
                                <th>Batch No.</th>
                                <th>Requested Quantity</th>
                                <th>Received Quantity</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="view-all-requests">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">

                            </ul>
                        </nav>
                    </div>
                </div>


                <!-- <div class="container mt-1 col-10" style="width: 400px;"> -->

                <span  style="display: inline-block;  padding: 0px 50px 0px 50px; width: 500px; margin-left: 10px;">
                <div class="mb-3">
                        <label for="allocation-allocationId" class="form-label">ID</label>
                        <input type="text" disabled class="form-control" id="allocation-allocationId" placeholder="Allocation Id">
                    </div>
                    <div class="mb-3">
                        <label for="allocation-date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="allocation-date" placeholder="Date">
                    </div>
                    <div class="mb-3">
                        <label for="allocation-qty" class="form-label">Allocating Quantity</label>
                        <input type="text" class="form-control" id="allocation-qty" placeholder="Allocated Quantity">
                    </div>

                     <div class="mb-3">

                            <label for="vehicle-make">Fuel Type</label>
                            <select name="fuel-type" id="allocation-fuelType" class="form-control">
                                <option value="-">Select Fuel Type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diel">Diesel</option>
                            </select>
                    </div> 
                    
                </span>
                <span class="right-side" style="display: inline-block;padding: 0px 80px 0px 0px; width: 500px;">
                <div class="mb-3">
                        <label for="allocation-requestId" class="form-label">Request ID</label>
                        <input type="text" class="form-control" id="allocation-requestId" placeholder="Request Id">
                    </div>
                    <div class="mb-3">
                        <label for="allocation-requestQty" class="form-label">Requested Quantity</label>
                        <input type="text" class="form-control" id="allocation-requestQty" placeholder="Requested Quantity">
                    </div>
                    <div class="mb-3">
                        <label for="allocation-stationId" class="form-label">Station ID</label>
                        <input type="text" class="form-control" id="allocation-stationId" placeholder="Station Id">
                    </div>



                     <div class="mb-3">
                    <label for="vehicle-make">Fuel Request Status</label>
                            <select name="fuel-type" id="allocation-status" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="Pending">Pending</option>
                                <option value="Cancelled">Cancelled</option>
                                <option value="Allocated">Allocated</option>
                            </select>                        
                    </div>
                </span>

                  
                    
                     
                    <div style="padding-left: 60px;">
                    <button type="button" class="btn btn-primary" onclick="allocateFuel()">Allocate</button>
                    </div>
                <!-- </div>  -->

                          
                 


            </div>
        </div>
    </div>
</div>