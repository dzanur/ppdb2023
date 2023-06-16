    
    <script src="http://maps.google.com/maps/api/js"></script>
    <style>
        .wrapper {
        /* display: flex; */
        align-items: center;
        justify-content: center;
        max-width: 800px;
        width: 100%;
        min-height: 100%;
        padding: 20px;
        }

        .tooltip {
        position: relative;
        display: inline-block;
        }

        .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
        }

        #map-canvas{
        height:250px
        }
    </style>
    <div class="container wrapper p-5">
        <div class="card p-md-4">
            <div class="card-body">
            <h5 class="card-title mb-3">Ambil Titik koordinat</h5>
            <div id="map-canvas" class="mb-3"></div>
            <?php
            if(!isset($_POST['latlong'])) {
            echo "";
            }else {
            ?>
            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                Sukses : <?= $_POST['latlong']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>
            <form id="tampilkan" NAME="rd" METHOD="POST">
                <div class="form-group">
                    <label for="lat">Latitude</label>
                    <INPUT TYPE="text" NAME="lat" ID="lat" class="form-control" VALUE="" disabled>
                </div>
                <div class="form-group">
                    <label for="long">Longitude</label>
                    <INPUT TYPE="text" NAME="long" ID="long" class="form-control" VALUE="" disabled>
                </div>
                <form action="index.php" method="post">
                    <div class="form-group">
                    <label class="" for="inlineFormInput">Posisi</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="latlong" name="latlong" aria-describedby="basic-addon1">
                        <button class="input-group-text bg-warning text-light border-grey" id="basic-addon1" onclick="copy_text()" onmouseout="outFunc()"><span class="tooltiptext" id="myTooltip"><i class="fa-regular fa-clipboard"></i></span></button>
                    </div>
                    </div>
                </form>
                <div class="d-grid gap-2">
                    <button type="button" onclick="getLocation(); showlocation()" class="btn btn-success"><i class="fa-solid fa-location-dot text-danger shadow"></i> Ambil lokasi</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="assets/js/tikor.js"></script>