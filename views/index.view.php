<?php require "views/partials/head.php"; ?>
    
<body>
<?php require "views/partials/nav.php"; ?>
    <main>
        <section>
            <table id='boodschappen'>
                <tr>
                   <th>
                    Product
                   </th>
                   <th>
                    Prijs
                   </th>     
                   <th>
                    Aantal
                   </th>
                   <th>
                    Subtotaal
                   </th>
                </tr>
                <?php foreach ($products as $product): ?>
<tr>
<td class="textLeft">
     <?=  $product['product']; ?>
</td>
<td>
<?= $product['price']; ?>
</td>
<td class="textLeft">
                     <?= $product['amount'] ?>  
                    </td>
                    <td class="productTotalCost">
                        <?= $product['amount'] * $product['price'] ?>
                    </td>
                </tr>
<?php endforeach ?>

                   
                <tr>
                    <th colspan="3">
                        Totaal
                    </th>
                    <td id="totalCost">
                        <?= $totalPrice; ?>
                    </td>

                    
                </tr>
            </table>
        </section>
    </main>
     
</body>