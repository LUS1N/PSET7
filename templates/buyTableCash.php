<!--Default row, current cash-->
<table class="table">
    <tr id="cash">
        <td class="symbol">CASH</td>
        <td class="name"></td>
        <td class="price"></td>
        <td class="amount"></td>
        <td class="total" id="cashMoney">$ <?= number_format($_SESSION["portfolio"]["cash"], 2, '.', ' ') ?></td>
        <td class="button"></td>
    </tr>
</table>