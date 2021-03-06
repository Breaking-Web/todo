<?php
    require("db.php");
    $id = (int)$_REQUEST['id'];
    $trash = (int)$_REQUEST['trash'];
    $version = (int)$_REQUEST['version'];
    dbQueryOrDie($db, "UPDATE todo SET deleted=$trash WHERE id=$id AND version=$version");
    $affectedRows = $db->affected_rows;
    if ($affectedRows < 1) {
        echo "In der Datenbank ist eine andere Version gespeichert als du gesendet hast. Es scheint so als wäre der Eintrag in der Zwischenzeit verändert worden! Bitte lade die Einträge neu!";
    } else if ($affectedRows > 1) {
        echo "Schwerwiegender Applikationslogik-Fehler: Mehr als einen Eintrag verändert!";
    } else {
        echo $affectedRows;
    }
    $db->close();
