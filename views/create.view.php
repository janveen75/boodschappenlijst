<?php require "partials/head.php"; ?>
    
<body>
   <?php require "partials/nav.php"; ?>
    <main>
        <section>
            <form  method="post" action="/create">
            <table>
                <tr><th>Naam:</th><td><input name="name" type="text" <?= isset($_POST['name'])? "value=".$_POST['name']:"value ='Product'" ?>></td> <td class='error_table'>
            <?= $errors['name'] ?>
</td></tr>
                <tr><th>Aantal:</th><td><input name="number" type="number" <?= isset($_POST['number'])? "value=".$_POST['number']:"value ='0'" ?>></td> <td  class='error_table'>
            <?= $errors['amount'] ?>
</td></tr>
                <tr><th>Prijs per stuk</th><td><input name="price" type="text" <?= isset($_POST['price'])? "value=".$_POST['price']:"value ='0.00'" ?>></td> <td  class='error_table'>
            <?= $errors['decimal'] ?>
</td></tr>
            </table>
            <input type="submit" value="Bevestig"></input>
        </form>
        </section>
        <section class="error" <?php $error != ""?"display='block'":"display='none'" ?>>
            <?= $error ?>
        </section>
    </main>
</body>    