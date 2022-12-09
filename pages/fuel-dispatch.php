<div style="display: none" id="fuel-dispatch-page" class="row">
    <div class="col-lg-12 col-xl-12 mt-3">
        <div class="card shadow">
            <div class="card-header py-3 d-flex justify-content-between">
                <p class="text-primary m-0 font-weight-bold">Fuel Dispatches</p>
                 </div>
            <div class="card-body">
                <div style="height:600px; overflow-y:auto;" class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                    <div class="table-outter-frame">
                        <table class="table my-0">
                            <thead>
                            <tr>
                                <th>Allocation Id</th>
                                <th>Allocation Date</th>
                                <th>All Qty</th>
                                <th>Fuel Type</th>
                                <th>Request Id</th>
                                <th>Station Id</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="allocationTbl">

                         

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
                        <label for="dispatch-dispatchId" class="form-label">Dispatch ID</label>
                        <input type="text" disabled class="form-control" id="dispatch-dispatchId" placeholder="Dispatch ID">
                    </div>
                    <div class="mb-3">
                        <label for="dispatch-allocation-id" class="form-label">Allocation Id</label>
                        <input type="text" class="form-control" id="dispatch-allocation-id" placeholder="Allocation Id">
                    </div>
                    <div class="mb-3">
                        <label for="dispatch-date" class="form-label">Dispatched Date</label>
                        <input type="date" class="form-control" id="dispatch-date" placeholder="Date">
                    </div>
                    
                   <div class="mb-3">
                        <label for="dispatch-deliveryTime" class="form-label">Delivery Time</label>
                        <input type="text" class="form-control" id="dispatch-deliveryTime" placeholder="Delivery Time">
                    </div>
                    <div class="mb-3">
                        <label for="dispatch-Fuel-Quantity" class="form-label">Fuel Quantity</label>
                        <input type="text" class="form-control" id="dispatch-Fuel-Quantity" placeholder="Fuel Quantity">
                    </div>
                    <div class="mb-3">
                        <label for="dispatch-stationId" class="form-label">Station Id</label>
                        <input type="text" class="form-control" id="dispatch-stationId" placeholder="Station Id">
                    </div>
                    <div class="mb-3">
                        <label for="dispatch-fuelType" class="form-label">Fuel Type</label>
                        <input type="text" class="form-control" id="dispatch-fuelType" placeholder="Fuel Type">
                    </div>
                    <div class="mb-3">
                    <label for="vehicle-make">Fuel Dispatch Status</label>
                            <select name="fuel-type" id="dispatch-status" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="1">Pending</option>
                                <option value="2">Dispatched</option>
                                <option value="3">Allocated</option>
                            </select>                        
                    </div> 
                    <div class="mb-3">

                            <label for="vehicle-make">Transport Unit</label>
                            <select name="fuel-type" id="dispatch-transportUnit" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="1">Lorry</option>
                                <option value="2">Van</option>
                            </select>
                    </div> 
                    <div>
                    <button type="button" class="btn btn-danger" onclick="dispatchFuel()">Dispatch</button>
                    </div>
                </div> 



            </div>
        </div>
    </div>
</div>