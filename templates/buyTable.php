<form action="buy.php" id="<?= $symbol . "form" ?>" method="post"
      onsubmit=" return checkCondition() ">
    <table class="table">
        <tr>
            <td class="symbol"><?= $symbol ?></td>
            <td class="name"><?= $name ?></td>
            <td class="price" id="<?= $symbol . "price" ?>">$ <?= number_format((float)$price, 2, '.', ' ') ?> </td>

            <td class="amount">
                <input type="text" name="amount" id="<?= $symbol ?>" oninput="calculateTotal(this)"
                       size="5">
            </td>
            <td class="total" id="<?= $symbol . "amount" ?>"></td>

            <td class="button">
                <input type="hidden" name="symbol" value="<?= $symbol ?>"/>
                <input type="hidden" name="price" value="<?= $price ?>"/>
                <input type="submit" value="Buy" class="sellButton" id="<?= $symbol ?>sell"
                       onmouseover="checkTransaction(this)" onmouseout="unMakeItRed(this)">
            </td>
        </tr>
    </table>
</form>