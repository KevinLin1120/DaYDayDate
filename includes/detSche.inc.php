<?php
    include("./dbConn.inc.php");
    //
    if(isset($_POST["action"]) && ($_POST["action"] == "delete")){
        //SQL description
        $sql_query = "DELETE FROM schedule	WHERE _id=?";

        //Prepare SQL description
        $stmt = $db_link -> prepare($sql_query);
        //Bind params
        $stmt -> bind_param("i", $_POST["_id"]);
        //Execute the statement
        $stmt -> execute();
        //Close the statement
        $stmt -> close();
        $db_link -> close();
        echo "alert('Update Successfully!')";
        header("location: ./index.php");
    }
?>