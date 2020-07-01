<?php 
    function startVisu() {
        $request = getStudent();
        $request2= getValideExercice();
        $request3= getReturnedExercice();
        $request4= getInProgressExercice();
        return_to_line();
        require('View/visu_class.php');
    }

    function return_to_line(){
        $i=0;
        if($i == 0) {
            echo "<div class='box_row'>";
        }  
        elseif($i == 3) {
            echo "</div>";
            echo "<dic class='box_row'>";
        }
    }
?>