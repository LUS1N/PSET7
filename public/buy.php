<?php
    /**
     * Created by PhpStorm.
     * User: T
     * Date: 2015.09.22
     * Time: 20:04
     */

// configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("buy_form.php", ["title" => "Buy"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $quote;
        if (count($_POST) == 1)
        {
            $quote = lookup($_POST["quote"]);
            //dump($quote);
            render("buy_layout.php", ["title" => "Buy", "symbol" => strtoupper($quote["symbol"]), "name" => $quote["name"],
                                      "price" => $quote["price"]]);
        }
        else
        {
            dump($_POST);
        }
    }

