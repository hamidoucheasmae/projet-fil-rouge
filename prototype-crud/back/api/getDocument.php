<?php
require_once '../manager/documentsManager.php';

     $documentsManager = null;
        $documentsManager = new DocumentsManager();    
        $documents = $documentsManager->getList();
        print_r(json_encode($documents));
?>
