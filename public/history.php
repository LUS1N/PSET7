<?php

    // configuration
    require("../includes/config.php");
    $id = $_SESSION["id"];
    $history = query("SELECT symbol, shares, action,price, time FROM history WHERE id = $id");
    //dump($history);
    render("history_layout.php", ["title" => "History", "history" => $history]);
