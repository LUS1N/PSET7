<?php
    /**
     * Created by PhpStorm.
     * User: T
     * Date: 2015.09.24
     * Time: 14:22
     */

    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("account_form.php", ["title" => "Account"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //dump($_POST);
        if ($_POST["newPw"] != $_POST["newPwRepeat"])
        {
            apologize("Passwords don't match");
        }

        //dump($_POST);
        $id = $_SESSION["id"];
        $hash = query("SELECT hash FROM users WHERE id = $id");
        //dump($hash);
        // compare hash of user's input against hash that's in database
        if (crypt($_POST["oldPW"], $hash[0]["hash"]) == $hash[0]["hash"])
        {
            if (query("UPDATE users SET hash = ? ", @crypt($_POST["newPw"])) !== false)
            {
                success("Password change successful!");
            }
            else
            {
                apologize("Change unsuccessful");
            }
        }
        else
        {
            apologize("Incorrect password");
        }
    }
