<!-- Modal -->
<div class="modal fade" id="fuel-token-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Read Fuel Token</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-fuelRequest">
                    <div class="form-group row">
                        <div class="row-element">
                            <div class="qrscanner" id="scanner">
                            </div>
                        </div>

                    </div>

                            <div class="form-group"><input readonly name="text" id="scannedTextMemo" class="form-control read-item" type="text" placeholder="Waiting for a Token" name="username"></div>
                            <button name="btn-submit" id="btn-submit" class="btn btn-block btn-user btn-cart" type="submit">Submit</button>
                            <hr>






                </form>
            </div>
        </div>
    </div>
</div>