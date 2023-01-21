<!-- Modal -->
<div class="modal fade" id="stRegister-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register New Station</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-stationRegister">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="hidden" name="station-id" id="station-id">
                            <label for="station-name">Fuel Station Name</label>
                            <input class="form-control" type="text" id="station-name" name="station-name" placeholder="Enter Fuel Station Name" required>

                        </div>
                        <div class="col-sm-6">
<!--                            <label for="vehicle-make">Select Brand</label>-->
<!--                            <select name="vehicle-make" id="vehicle-make" class="form-control" required>-->
<!--                                <option value="-">Select Vehicle Brand</option>-->
<!--                                <option value="Toyota">Toyota</option>-->
<!--                                <option value="Nissan">Nissan</option>-->
<!--                                <option value="Ford">Ford</option>-->
<!--                                <option value="Holden">Holden</option>-->
<!--                                <option value="Other">Other</option>-->
<!--                            </select>-->
                            <label for="vehicle-rego">Fuel Station Address</label>
                            <input class="form-control" type="text" id="station-address" name="station-address" placeholder="Enter Fuel Station Address" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="vehicle-model">Mobile Number</label>
                            <input class="form-control" type="number" id="mobile-number" name="mobile-number" placeholder="Enter Mobile Number" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="vehicle-year">Email Address</label>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Enter Email Address" required>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="vehicle-make">Select District</label>
                            <select name="station-district" id="station-district" class="form-control">
                                <option value="-">Select District</option>
                                <option value="1">Gampaha</option>
                                <option value="2">Colombo</option>
                                <option value="3">Galle</option>

                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="vehicle-make">Station Status</label>
                            <select name="station-status" id="station-status" class="form-control" required>
                                <option value="-">Select Status</option>
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="vehicle-year">Petrol Capacity</label>
                                <input class="form-control" type="number" id="petrol-capacity" name="petrol-capacity" placeholder="Enter Petrol Capacity" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="vehicle-year">Diesel Capacity</label>
                                <input class="form-control" type="number" id="diesel-capacity" name="diesel-capacity" placeholder="Enter Diesel Capacity" required>
                            </div>

                    </div>
                    <div class="form-group row">
                        <div  class="col-sm-6">
                            <input class="btn btn-primary form-control" type="submit" id="btn-register" name="btn-register" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>