<?php

    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("quote_form.php", ["title" => "Quote", "action" => "quote"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["quote"]))
        {
            apologize("You must provide a symbol.");
        }
        else
        {
            if (($quote = lookup($_POST["quote"])) === false)
            {
                apologize("Wrong symbol");
            }
            else
            {
                $quote = ["title" => "Quote", "qt" => $quote];
                render("quote_lookup.php", $quote);
            }

            // TODO add the ability to go to buy from here
        }
    }