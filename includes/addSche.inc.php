<?php

//if(isset($_POST['confirm'])){
        require ("./dbConn.inc.php");
        // $title = $_POST['title'];
        // $stDT = $_POST['startDT'];
        // $enDT = $_POST['endDT'];
        // $date = new DateTime('Y-Md H:i:s', '2022-0601 16:40:031');
        $s_date=date("Y-m-d H:i:s",strtotime('2022-06-01 16:40:31'));
        // $oldDate = strtotime('2022-06-01 16:40:031');
        // $newDate = date('Y-M-d H:i:s', $oldDate);
        // $stDT = date_format($date, "Y-Md H:i:s");
        echo "<script> alert($s_date)</script>";
        // $edDT = strtotime('2022-0602 12:00:00');
        $sql_insert = "INSERT INTO  `schedule` (`userId`,`title`,`stDT`, `enDT`, `color`, `isPublic`) 

                        VALUE ('1', 'hi', '$s_date',  '$s_date','white','1' )";
                        
        $stmt = mysqli_stmt_init($db_link);
        // echo "<script> alert(strtotime('2022-0601 16:40:03'))</script>";
        // //Prepare SQL description
        $stmt = $db_link -> prepare($sql_insert);
        // //Bind params
        // // $stmt -> bind_param($stmt,"sss", $_POST['title'],$_POST['startDT'], $_POST['endDT']);
        // $stmt -> bind_param($stmt, "issssi", 1, "hi", "2022-0601 16:40:03", "2022-0602 12:00:00","white",1 );
        
        //Execute the statement
        $stmt -> execute();
        // mysqli_stmt_store_result($stmt);
        // $sql_insert = "INSERT INTO  schedule (`title`,`stDT`, `enDT`) VALUE (?, ? ,?)";
        //Close the statement
        $stmt -> close();
        $db_link -> close();
        echo "<script> alert('Success')</script>";
        //mysqli_stmt_close($stmt);
        //mysqli_close($db_link);
    //}
?>