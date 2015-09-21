<?php

    // configuration
    require("../includes/config.php");


    // if positions are already saved, don't load them again
    // positions will be updated when they are sold or bough
    if (empty($_SESSION["portfolio"]))
    {
        getPositions();
    }

    // update the values of owned stocks though
    updateStockValues();

    // render portfolio with positions
    render("portfolio.php", ["title" => "Portfolio"]);


