<!--Default row, current cash-->
<table class="table">
    <tr id="cash">
        <td class="symbol">CASH</td>
        <td class="name"></td>
        <td class="shares"></td>
        <td class="price"></td>
        <td class="amount"></td>
        <td class="total">$ <?= number_format($_SESSION["portfolio"]["cash"], 2, '.', ' ') ?></td>
        <td class="button"></td>
    </tr>
</table>
<div>
    or <a href="index.php">go back</a>
</div>