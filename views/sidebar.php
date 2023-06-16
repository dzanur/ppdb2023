<div class="col-12 col-md-3 order-2">
    <div class="sticky-top">
        <div class="card mb-4 rounded-3 mt-5 mt-md-0 shadow-sm border-success-600">
          <div class="card-header py-2 text-bg-success-700 border-success-600">
            <h5 class="my-0 fw-normal"><i class="fa-solid fa-list fa-sm"></i> Menu</h5>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="/#cara-daftar" class="link-samping">Cara Mendaftar</a></li>
                <li class="list-group-item list-group-item-action"><a href="/#jadwal" class="link-samping">Jadwal Pendaftaran</a></li>
                <?php if($request == "/persyaratan") {echo "";}else{echo "<li class='list-group-item list-group-item-action'><a href='/persyaratan' class='link-samping'>Persyaratan</a></li>";} ?>
                <?php if($request == "/download") {echo "";}else{echo "<li class='list-group-item list-group-item-action'><a href='/download' class='link-samping'>Download</a></li>";} ?>
                <!--<li class="list-group-item"><a href="/#cara-daftar" class="link-samping">And a fifth one</a></li> -->
            </ul>
            <!-- <button type="button" class="w-100 btn btn-lg btn-success"><i class="fa-solid fa-user-pen"></i> Daftar</button> -->
          </div>
        </div>
    </div>
</div>