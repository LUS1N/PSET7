<table class="portfolio table">

    <thead>
    <tr>
        <th>Symbol</th>
        <th>Name</th>
        <th>Shares</th>
        <th>Price</th>
        <th>TOTAL</th>
    </tr>
    </thead>

    <tbody>

    <!--Insert values-->
    <?php foreach ($_SESSION["portfolio"]["positions"] as $position): ?>

        <tr>
            <td><?= $position["symbol"] ?></td>
            <td><?= $position['name'] ?></td>
            <td><?= $position["shares"] ?></td>
            <td>$ <?= number_format($position["price"], 2, ".", " ") ?></td>
            <!--Calculate the worth of owned stocks-->
            <td>$ <?= number_format($position["shares"] * $position["price"], 2, ".", " ") ?></td>
        </tr>
    <?php endforeach ?>

    <!--Default row, current cash-->
    <tr id="cash">
        <td colspan="4">CASH</td>
        <td>$ <?= number_format($_SESSION["portfolio"]["cash"], 2, ".", " ") ?></td>
    </tr>

    </tbody>

</table>



