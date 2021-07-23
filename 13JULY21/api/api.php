<?php
move_uploaded_file($_FILES['file']['tmp_name'],'media/'.$_FILES['file']['name']);
?>