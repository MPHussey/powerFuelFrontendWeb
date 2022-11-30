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
                            <input type="hidden" name="station-id" id="station-id">
                            <label for="vehicle-make">Select Fuel Type</label>
                            <select name="fuel-type" id="fuel-type" class="form-control">
                                <option value="-">Select Fuel Type</option>
                                <option value="1">Petrol</option>
                                <option value="2">Diesel</option>

                            </select>
                        </div>
                        <div class="col-sm-6">

                            <label for="vehicle-make">Fuel Request Status</label>
                            <select name="fuel-type" id="fuel-type" class="form-control">
                                <option value="-">Select Status</option>
                                <option value="1">Pending</option>
                                <option value="2">Dispatched</option>
                                <option value="3">Delivered</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="vehicle-model">Requested Quantity</label>
                            <input class="form-control" type="text" id="mobile-number" name="mobile-number" placeholder="Enter Mobile Number" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="vehicle-year">Received Quantity</label>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email Address" required>
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