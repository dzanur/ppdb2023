<?php
$id = $_POST['id'];
$jalur = $_POST['jalur'];

?>
    <style type="text/css">
        
        .iframe{      
        display: block;  /* iframes are inline by default */   
        height: 100vh;  /* Set height to 100% of the viewport height */   
        width: 100vw;  /* Set width to 100% of the viewport width */     
        border: none; /* Remove default border */
    }
    </style>
    <iframe src="<?= $linkppdb . $jalur ?>/detail/<?= $id ?>"
            frameborder="0" 
            marginheight="0" 
            marginwidth="0" 
            width="100%" 
            height="100%" 
            class="iframe"
            scrolling="auto">
    </iframe>