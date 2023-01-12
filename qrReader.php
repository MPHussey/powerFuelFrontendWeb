<!DOCTYPE html>
<html>
<head>
    <title>Read Items</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/itemreader-style.css">
    <link rel="stylesheet" type="text/css" href="./Resources/css/JsQRScanner.css">
    <script type="text/javascript" src="./js/qrCodeJs/jsqrscanner.nocache.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div  class="col -lg-5">
                            <div  class="row justify-content-center pt-4">
                                <img class="img-fluid px-2" src="./assets/img/icons/icons8-fire-60.png" alt="brand">
                                <h3 class="mt-3 text-center">PowerFuel QR Reader</h3>
                            </div>
                            <hr>
                            <div class="row-element">
                                <div class="qrscanner" id="scanner">
                                </div>
                            </div>


                            <hr>
                            <div id="form-frame" class="px-5 pb-5 pt-4">
                                <form class="user" action="itemread-backend.php" method="post">
                                    <div class="form-group"><input readonly name="text" id="scannedTextMemo" class="form-control read-item" type="text" placeholder="Waiting for a Token" name="username"></div>
                                    <button name="btn-submit" id="btn-submit" class="btn btn-block btn-user btn-cart" type="submit">Submit</button>
                                    <hr>

                                </form>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">
    function onQRCodeScanned(scannedText)
    {
        var scannedTextMemo = document.getElementById("scannedTextMemo");
        var itemid = document.getElementById("itemid");
        var itemname = document.getElementById("itemname");
        var itemprice = document.getElementById("itemprice");
        var itemquantity = document.getElementById("itemquantity");
        if(scannedTextMemo)
        {
            var itemArr=scannedText.split(",");
            scannedTextMemo.value =scannedText;
            itemid.value=itemArr[0];
            itemname.value=itemArr[1];
            itemprice.value=itemArr[2];
            itemquantity.value=itemArr[3];
        }

    }

    function provideVideo()
    {
        var n = navigator;

        if (n.mediaDevices && n.mediaDevices.getUserMedia)
        {
            return n.mediaDevices.getUserMedia({
                video: {
                    facingMode: "environment"
                },
                audio: false
            });
        }

        return Promise.reject('Your browser does not support getUserMedia');
    }

    function provideVideoQQ()
    {
        return navigator.mediaDevices.enumerateDevices()
            .then(function(devices) {
                var exCameras = [];
                devices.forEach(function(device) {
                    if (device.kind === 'videoinput') {
                        exCameras.push(device.deviceId)
                    }
                });

                return Promise.resolve(exCameras);
            }).then(function(ids){
                if(ids.length === 0)
                {
                    return Promise.reject('Could not find a webcam');
                }

                return navigator.mediaDevices.getUserMedia({
                    video: {
                        'optional': [{
                            'sourceId': ids.length === 1 ? ids[0] : ids[1]//this way QQ browser opens the rear camera
                        }]
                    }
                });
            });
    }

    //this function will be called when JsQRScanner is ready to use
    function JsQRScannerReady()
    {
        //create a new scanner passing to it a callback function that will be invoked when
        //the scanner succesfully scan a QR code
        var jbScanner = new JsQRScanner(onQRCodeScanned);
        //var jbScanner = new JsQRScanner(onQRCodeScanned, provideVideo);
        //reduce the size of analyzed image to increase performance on mobile devices
        jbScanner.setSnapImageMaxSize(300);
        var scannerParentElement = document.getElementById("scanner");
        if(scannerParentElement)
        {
            //append the jbScanner to an existing DOM element
            jbScanner.appendTo(scannerParentElement);
        }
    }
</script>

</body>
</html>