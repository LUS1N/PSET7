<table class="buy table">

    <thead>
    <tr>
        <th>Symbol</th>
        <th>Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>TOTAL</th>
        <th id="button"></th>
    </tr>
    </thead>

    <tbody>


    <tr>
        <td><?= $symbol ?></td>
        <td><?= $name ?></td>
        <td id="<?= $symbol . "price" ?>">$ <?= number_format((float)$price, 2, '.', ' ') ?> </td>
        <form action="buy.php" id="<?= $symbol . "form" ?>" method="post"
              onsubmit=" return checkCondition(); ">
            <td>
                <input type="text" name="amount" id="<?= $symbol ?>" oninput="calculateTotal(this)"
                       size="5">
            </td>
            <td id="<?= $symbol . "amount" ?>"></td>

            <td id="button">
                <input type="hidden" name="symbol" value="<?= $symbol ?>"/>
                <input type="hidden" name="price" value="<?= $price ?>"/>
                <input type="submit" value="Buy" class="sellButton" id="<?= $symbol ?>sell"
                       onmouseover="checkTransaction(this)" onmouseout="unMakeItRed(this)">
            </td>
        </form>
    </tr>


    <!--Default row, current cash-->
    <tr id="cash">
        <td colspan="4">CASH</td>
        <td id="cashMoney">$ <?= number_format($_SESSION["portfolio"]["cash"], 2, '.', ' ') ?></td>
    </tr>

    </tbody>

</table>
<div>
    or <a href="index.php">go back</a>
</div>