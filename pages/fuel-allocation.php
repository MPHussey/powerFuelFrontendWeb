<div style="display: none" id="fuel-allocation-page" class="row">
    <div class="col-lg-12 col-xl-12 mt-3">
        <div class="card shadow">
            <div class="card-header py-3 d-flex justify-content-between">
                <p class="text-primary m-0 font-weight-bold">Fuel Allocations</p>
                <img class="request-fuel-modal-pop" src="./imgs/icons8-add-30.png" alt="add">
            </div>
            <div class="card-body">
                <div style="height:600px; overflow-y:auto;" class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                    <div class="table-outter-frame">
                        <table class="table my-0" id="dataTable">
                            <thead>
                            <tr>
                                <th>Req.Id</th>
                                <th>Req. Qty</th>
                                <th>Station Id</th>
                                <th>Status</th>
                                <th>Requested Quantity</th>
                                <th>Fuel Type</th>
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


                <div class="container mt-1 col-10 ">
                    <div class="mb-3">
                        <label for="allocation-allocationId" class="form-label">ID</label>
                        <input type="text" disabled class="form-control" id="allocation-allocationId" placeholder="Allocation Id">
                    </div>
                    <div class="mb-3">
                        <label for="allocation-date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="allocation-date" placeholder="Date">
                    </div>
                    <div class="mb-3">
                        <label for="allocation-qty" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="allocation-qty" placeholder="Allocated Quantity">
                    </div>


                    <!-- <div class="mb-3">
                        <label for="allocation-fuelType" class="form-label">Fuel type</label>
                        <input type="text" class="form-control" id="allocation-fuelType" placeholder="Allocated Quantity">
                    </div> -->


                     <div class="mb-3">

                            <label for="vehicle-make">Fuel Type</label>
                            <select name="fuel-type" id="allocation-fuelType" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="1">Petrol</option>
                                <option value="2">Diesel</option>
                            </select>
                    </div> 
                    
                    
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


                    <!-- <div class="mb-3">
                        <label for="allocation-status" class="form-label">Fuel Request Status</label>
                        <input type="text" class="form-control" id="allocation-status" placeholder="Station Id">
                    </div> -->


                     <div class="mb-3">
                    <label for="vehicle-make">Fuel Request Status</label>
                            <select name="fuel-type" id="allocation-status" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="1">Pending</option>
                                <option value="2">Dispatched</option>
                                <option value="3">Allocated</option>
                            </select>                        
                    </div> 
                    <div>
                    <button type="button" class="btn btn-primary" onclick="allocateFuel()">Allocate</button>
                    </div>
                </div> 



            </div>
        </div>
    </div>
</div>