<?php
    include("./dbConn.inc.php");
    //
    if(isset($_POST["action"]) && ($_POST["action"] == "update")){
        //SQL description
        $sql_query = "UPDATE schedule SET =?, userId=?, title=?, stDT=?,	enDT=?, 
        link=?, invites=?, color=?,	note=?,	isPublic=?	WHERE _id=?";

        //Prepare SQL description
        $stmt = $db_link -> prepare($sql_query);
        //Bind params
        $stmt -> bind_param("iisssssssi", $_POST["_id"], $_POST["userId"],
        $_POST["title"], $_POST["stDT"], $_POST["enDT"], $_POST["link"],
        $_POST["invites"], $_PSOT["color"],	$_POST["note"],	$_POST["isPublic"]);
        //Execute the statement
        $stmt -> execute();
        //Close the statement
        $stmt -> close();
        $db_link -> close();
        echo "alert('Update Successfully!')";
        header("location: ./index.php");
    }
?>