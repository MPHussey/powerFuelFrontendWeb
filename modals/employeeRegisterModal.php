<!-- Modal -->
<div class="modal fade" id="ampRegister-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register New Station</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-employeeRegister">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="hidden" name="employee-id" id="employee-id">
                            <label for="employee-name">Employee Name</label>
                            <input class="form-control" type="text" id="employee-name" name="employee-name" placeholder="Enter Employee Name" required>

                        </div>
                        <div class="col-sm-6">

                            <label for="employee-email">Email Address</label>
                            <input class="form-control" type="text" id="employee-email" name="employee-email" placeholder="Enter employee email Address" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="emp-password">Employee Password</label>
                            <input class="form-control" type="password" id="emp-password" name="emp-password" placeholder="Enter Employee Password" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="vehicle-make">Employee Designation</label>
                            <select name="employee-designation" id="employee-designation" class="form-control">
                                <option value="-">Select Employee Designation</option>
                                <option value="1">Admin</option>
                                <option value="2">Fuel Handler</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div  class="col-sm-6">
                            <input class="btn btn-primary form-control" type="submit" id="btn-emp-register" name="btn-emp-register" value="Register Employee">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>