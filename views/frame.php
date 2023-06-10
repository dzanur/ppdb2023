<?php
$id = isset($_POST['id']);
$jalur = $_POST['jalur'];
// $afirmasi = isset($_POST['afirmasi']);
// $zonasi = isset($_POST['zonasi']);
// $mutasi = isset($_POST['mutasi']);
// $akademik = isset($_POST['akademik']);
// $nonakademik = isset($_POST['nonakademik']);

?>
    <style type="text/css">
        
        .iframe{      
        display: block;  /* iframes are inline by default */   
        height: 100vh;  /* Set height to 100% of the viewport height */   
        width: 100vw;  /* Set width to 100% of the viewport width */     
        border: none; /* Remove default border */
        background: lightyellow; /* Just for styling */
    }
    </style>
    <iframe src="https://ppdb.bantenprov.go.id/#/<?= $jalur ?>/detail/<?= $id ?>"
            frameborder="0" 
            marginheight="0" 
            marginwidth="0" 
            width="100%" 
            height="100%" 
            class="iframe"
            scrolling="auto">
    </iframe>