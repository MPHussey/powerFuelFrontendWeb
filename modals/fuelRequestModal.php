<!-- Modal -->
<div class="modal fade" id="fuel-request-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Request Fuel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-fuelRequest">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="hidden" name="request-id" id="request-id">
                            <label for="fuel-type">Select Fuel Type</label>
                            <select name="fuel-type" id="fuel-type" class="form-control">
                                <option value="-">Select Fuel Type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>

                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="vehicle-model">Request Fuel</label>
                            <input class="form-control" type="text" id="requested-amount" name="requested-amount" placeholder="Request Fuel Amount (Liters)">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 fuelRequest-status-Section">

                            <label for="vehicle-make">Fuel Request Status</label>
                            <select name="request-status" id="request-status" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="pending">Pending</option>
                                <option value="approved">Approved</option>
                                <option value="delivered">Delivered</option>
                            </select>
                        </div>
                        <div class="col-sm-6 receivedAmount-section">
                            <label for="vehicle-year">Received Quantity</label>
                            <input class="form-control" type="text" id="received-amount" name="received-amount" placeholder="Enter Received Amount (Liters)">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div  class="col-sm-6">
                            <input class="btn btn-primary form-control" type="submit" id="btn-request-fuel" name="btn-request-fuel" value="Request">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>