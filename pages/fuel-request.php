<div style="display: none" id="fuel-request-page" class="row">
    <div class="col-lg-12 col-xl-12 mt-3">
        <div class="card shadow">
            <div class="card-header py-3 d-flex justify-content-between">
                <p class="text-primary m-0 font-weight-bold">Fuel Requests</p>
                <img class="request-fuel-modal-pop" src="./imgs/icons8-add-30.png" alt="add">
            </div>
            <div class="card-body">
                <div style="height:600px; overflow-y:auto;" class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                    <div class="table-outter-frame">
                        <table class="table my-0" id="dataTable">
                            <thead>
                            <tr>
                                <th>Rq. Date</th>
                                <th>Fuel Type</th>
                                <th>Rq. Status</th>
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
            </div>
        </div>
    </div>
</div>