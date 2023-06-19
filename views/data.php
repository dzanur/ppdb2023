<?php


if (isset($_POST['nisn']) == "") {
    $nisn = "";
} else {
    $nisn = $_POST['nisn'];
}
if (isset($_POST['npsn']) == "") {
    $npsn = "";
} else {
    $npsn = $_POST['npsn'];
}




?>
<script>
  document.addEventListener("DOMContentLoaded", function(){
		
    window.addEventListener('scroll', function() {
         
      if (window.scrollY > 50) {
        document.getElementById('sidebarid').classList.add('sidebarid');
      } else {
         document.getElementById('sidebarid').classList.remove('sidebarid');
      } 
    });
  }); 
  // DOMContentLoaded  end
</script>
<div class="container">
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div id="sidebarid" class="sticky-top">
                    <div class="card">
                        <div class="card-header bg-warning">
                            Cari Data
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="mb-3 row">
                                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                    <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nisn" name="nisn" value="<?=$nisn?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="npsn" class="col-sm-2 col-form-label">NPSN</label>
                                    <div class="col-sm-10">
                                    <input type="number" class="form-control" id="npsn" name="npsn" value="<?=$npsn?>">
                                    </div>
                                </div>
                                <button class="btn btn-warning" type="submit">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 pt-3 pt-md-0">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <div class="d-inline-flex p-2">Data Identitas</div>
                        <!-- <a href="export" class=" ms-5 btn btn-success btn-sm d-inline-flex p-2 text-end"><i class="fa-solid fa-file-excel"></i></a> -->
                        <!-- <span class="d-flex text-start">Data Identitas
                        <a class="text-end">Export</a>
                        </span> -->
                    </div>
                    <?php 
                    if(isset($_POST['nisn']) == ""){
                        echo "";
                    }else{
                        include 'siswa.php';
                    } ?>
                </div>
            </div>
        </div>
        
        
    </div>
</div>