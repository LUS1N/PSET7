/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 */

var goodToGo = false;
/**
 * Calculates the worth of sold stocks
 * and puts it in the table
 * @param $el
 */
function calculateTotal(el)
{
    // parse the price of stock
    var price = $("#" + el.id + "price").html().toString().substr(2);

    // calculate the worth and add it to the field
    $("#" + el.id + "amount").text((price * el.value).toFixed(2));
}

/**
 * Gives user feedback if the transaction is not doable
 */
function checkTransaction(button)
{
    var ind = button.id.indexOf("sell");
    var id = "#" + button.id.substr(0, ind);
    var amount = $(id);
    var owned = $(id + "shares");

    if (isNaN(amount.val()) || amount.val() < 1 || (parseInt(amount.val()) > parseInt(owned.html())))
    {
        makeItRed(button);
        goodToGo = false;
    }
    else
    {
        button.style.backgroundColor = "#27ff15";
        goodToGo = true;
    }
}

function makeItRed(button)
{
    button.style.borderColor = "red";
}

function unMakeItRed(button)
{
    button.style.borderColor = "#27ff15";
    button.style.backgroundColor = "white";
}

function checkCondition(form)
{
    return goodToGo;
}
