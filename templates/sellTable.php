<!--Insert values-->
<?php foreach ($_SESSION["portfolio"]["positions"] as $position): ?>
    <form action="sell.php" id="<?= $position["symbol"] . "form" ?>" method="post"
          onsubmit=" return checkCondition(this)">
        <table class="table">
            <tr>
                <td class="symbol"><?= $position["symbol"] ?></td>
                <td class="name"><?= $position['name'] ?></td>
                <td class="shares" id="<?= $position["symbol"] . "shares" ?>"><?= $position["shares"] ?></td>
                <td class="price"
                    id="<?= $position["symbol"] . "price" ?>">$ <?= number_format($position["price"], 2, '.', ' ') ?>
                </td>

                <td class="amount">
                    <input type="text" name="amount" id="<?= $position["symbol"] ?>" oninput="calculateTotal(this)"
                           size="5">
                </td>
                <td class="total" id="<?= $position["symbol"] . "amount" ?>">0.00</td>

                <td class="button">
                    <input type="hidden" name="symbol" value="<?= $position["symbol"] ?>"/>
                    <input type="submit" value="Sell" class="sellButton" id="<?= $position["symbol"] ?>sell"
                           onmouseover="checkTransaction(this)" onmouseout="unMakeItRed(this)">
                </td>

            </tr>
        </table>
    </form>
<?php endforeach ?>