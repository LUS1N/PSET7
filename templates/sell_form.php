<table class="sell table">

    <thead>
    <tr>
        <th>Symbol</th>
        <th>Name</th>
        <th>Shares</th>
        <th>Price</th>
        <th>Amount</th>
        <th>TOTAL</th>
        <th id="button"></th>
    </tr>
    </thead>

    <tbody>

    <!--Insert values-->
    <?php foreach ($_SESSION["portfolio"]["positions"] as $position): ?>

        <tr>
            <td><?= $position["symbol"] ?></td>
            <td><?= $position['name'] ?></td>
            <td id="<?= $position["symbol"] . "shares" ?>"><?= $position["shares"] ?></td>
            <td id="<?= $position["symbol"] . "price" ?>">$ <?= number_format($position["price"], 2, '.', ' ') ?></td>
            <form action="sell.php" id="<?= $position["symbol"] . "form" ?>" method="post"
                  onsubmit=" return checkCondition(this)">
                <td>
                    <input type="text" name="amount" id="<?= $position["symbol"] ?>" oninput="calculateTotal(this)"
                           size="5">
                </td>
                <td id="<?= $position["symbol"] . "amount" ?>">0.00</td>

                <td id="button">
                    <input type="hidden" name="symbol" value="<?= $position["symbol"] ?>"/>
                    <input type="submit" value="Sell" class="sellButton" id="<?= $position["symbol"] ?>sell"
                           onmouseover="checkTransaction(this)" onmouseout="unMakeItRed(this)">
                </td>
            </form>
        </tr>

    <?php endforeach ?>

    <!--Default row, current cash-->
    <tr id="cash">
        <td colspan="5">CASH</td>
        <td>$ <?= number_format($_SESSION["portfolio"]["cash"], 2, '.', ' ') ?></td>
    </tr>

    </tbody>

</table>
