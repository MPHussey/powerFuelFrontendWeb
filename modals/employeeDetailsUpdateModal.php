<!-- Modal -->
<div class="modal fade" id="empUpdate-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Employee Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-updateEmployee">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="hidden" name="update-employee-id" id="update-employee-id">
                            <label for="update-employee-name">Employee Name</label>
                            <input class="form-control" type="text" id="update-employee-name" name="update-employee-name" placeholder="Enter Employee Name" required>

                        </div>
                        <div class="col-sm-6">

                            <label for="employee-email">Email Address</label>
                            <input class="form-control" type="text" id="update-employee-email" name="update-employee-email" placeholder="Enter employee email Address" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="update-emp-password">Employee Password</label>
                            <input class="form-control" type="password" id="update-emp-password" name="update-emp-password" placeholder="Enter Employee Password" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="vehicle-make">Employee Designation</label>
                            <select name="update-employee-designation" id="update-employee-designation" class="form-control">
                                <option value="-">Select Employee Designation</option>
                                <option value="Admin">Admin</option>
                                <option value="Fuel Handler">Fuel Handler</option>


                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="vehicle-make">Employee Status</label>
                            <select name="update-employee-status" id="update-employee-status" class="form-control">
                                <option value="-">Select Employee Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>


                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div  class="col-sm-6">
                            <input class="btn btn-primary form-control" type="submit" id="update-btn-emp-register" name="update-btn-emp-register" value="Update Employee">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>