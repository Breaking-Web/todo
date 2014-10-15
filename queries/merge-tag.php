<?php
    require("db.php");
    if (!isset($_REQUEST['id']) || !isset($_REQUEST['merge_id']))
    {
        die("Invalid parameters!");
    }
    $id   = (int)$_REQUEST['id'];
    $merge_id = (int)$_REQUEST['merge_id'];
    dbQueryOrDie($db, "UPDATE `todo_tags` SET `tag_id`=$merge_id WHERE `tag_id`=$id");
    dbQueryOrDie($db, "DELETE FROM `tags` WHERE id=$id");
    $affectedRows = $db->affected_rows;
    if ($affectedRows < 1) {
        echo "No rows affected!";
    } else if ($affectedRows > 1) {
        echo "More than one tag affected!";
    } else {
        echo $affectedRows;
    }
    $db->close();
