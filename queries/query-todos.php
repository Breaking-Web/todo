 <?php
    require("db.php");
    require("reactivate.php");

    // TODO: get ID of logged in user here!
    $age = (int)$_GET["age"];
    $list_id = (int)$_GET["list_id"];
    $sql = "SELECT todo.id, description as todo, dueDate as due, startDate as start, effort, ".
        "completed, notes, version, recurrenceMode, completionDate, ".
        "creationDate, deleted, ".
        "GROUP_CONCAT( DISTINCT name ORDER BY name SEPARATOR ',') as tags, list_id ".
        "FROM todo ".
        "LEFT OUTER JOIN todo_tags ON todo.id = todo_tags.todo_id ".
        "LEFT OUTER JOIN tags ON todo_tags.tag_id = tags.id ".
        "WHERE ".
            "list_id = ".$list_id." AND (".
            "completed=0 ".
            "OR completionDate > (UTC_TIMESTAMP() - INTERVAL $age DAY))".
        "GROUP BY todo.id";
    $result = jsonQueryResults($db, $sql);
    $db->close();
    echo $result;