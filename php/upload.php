<?php
$file_name = $_FILES['files']['name'];
$tmp_name = $_FILES['files']['tmp_name'];
$file_up_name = time() . $file_name;
move_uploaded_file($tmp_name, "files/" . $file_up_name);
