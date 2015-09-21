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
            <td>$ <?= $position["price"] ?></td>
            <!--Calculate the worth of owned stocks-->
            <td>$ <?= $position["shares"] * $position["price"] ?></td>
        </tr>

    <?php endforeach ?>

    <!--Default row, current cash-->
    <tr id="cash">
        <td colspan="4">CASH</td>
        <td>$ <?= $_SESSION["portfolio"]["cash"] ?></td>
    </tr>

    </tbody>

</table>


<div>
    <a href="/PSET7/public/quote.php">Quote</a><br/>
    <a href="/PSET7/public/logout.php">Log Out</a>

</div>
