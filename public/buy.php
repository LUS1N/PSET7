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
            // make sure the amount is a positive number
            if (!preg_match("/^\d+$/", $_POST["amount"]))
            {
                apologize("Bad input");
            }
            // make sure the user has enough cash
            if ($_POST["amount"] * $_POST["price"] > $_SESSION["portfolio"]["cash"])
            {
                apologize("You don't have enough cash");
            }

            $id = $_SESSION["id"];
            $symbol = $_POST["symbol"];
            $shares = $_POST["amount"];
            $price = $_POST["price"];


            if (query("INSERT INTO stocks(id, symbol, shares) VALUES($id, '$symbol', $shares) ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)") !== false)
            {
                if (query("UPDATE users SET cash = cash - ($price * $shares) WHERE id = $id") !== false)
                {
                    getPositions();
                    success("Successful purchase!");
                }
            }
            else
            {
                apologize("Unsuccessful transaction");
            }

        }
    }

