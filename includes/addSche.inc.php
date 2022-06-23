<?php
    if(isset($_POST['action']) && ($_POST["action"] == "confirm")){ 
        session_start();
        require ("./dbConn.inc.php");
        // $title = $_POST['title'];
        // $stDT = $_POST['startDT'];
        // $enDT = $_POST['endDT'];
        // $date = new DateTime('Y-Md H:i:s', '2022-0601 16:40:031');
        $s_date=date("Y-m-d H:i:s",strtotime('2022-06-01 16:40:31'));
        // $oldDate = strtotime('2022-06-01 16:40:031');
        // $newDate = date('Y-M-d H:i:s', $oldDate);
        // $stDT = date_format($date, "Y-Md H:i:s");

        // $edDT = strtotime('2022-0602 12:00:00');
        $sql_insert = "INSERT INTO  schedule (userId, title, stDT, enDT, color, isPublic) 

                        VALUE (?, ?, ?, ?, ?, ?)";
                        
        // $stmt = mysqli_stmt_init($db_link);

        // echo "<script> alert(strtotime('2022-0601 16:40:03'))</script>";

       
        // //Prepare SQL description
        $stmt = $db_link -> prepare($sql_insert);
        // //Bind params
        // $stmt -> bind_param($stmt,"sss", $_POST['title'],$_POST['startDT'], $_POST['endDT']);
        $stmt -> bind_param("issssi", $_SESSION["_id"], $_POST["title"],
         $_POST["startDT"], $_POST["endDT"], $_POST["color"], $_POST["isPublic"]);
         echo "<script> alert("+ $_POST['isPublic'] +")</script>";
        //Execute the statement
        if($stmt -> execute()){
            //Close the statement
            $stmt -> close();
            $db_link -> close();
            echo "<script> alert('Success')</script>";
        }
        else{
            echo "<script> alert('Fail')</script>";
            die(htmlspecialchars($stmt->error));
        }
        // mysqli_stmt_store_result($stmt);
        // $sql_insert = "INSERT INTO  schedule (`title`,`stDT`, `enDT`) VALUE (?, ? ,?)";

        
        //mysqli_stmt_close($stmt);
        //mysqli_close($db_link);
    }
?>