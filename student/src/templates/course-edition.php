    <!-- recursos guardados en la base de datos -->
<?php
    include("../forms/edit-course-form.php");
    if(isset($resources) ){
        echo "<h3>Resources</h3>";
        foreach($resources as $resource){

            switch($resource['type']){

                case 'PDF':
                    echo "<p> PDF:". $resource['name']."</p>";
                break;

                case 'VIDEO':
                    echo "<p> VIDEO:".$resource['name']."</p>";
                break;
            }
        }
    }
?>  