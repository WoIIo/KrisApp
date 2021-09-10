<?php
    include_once 'head.php';
    include_once './connect/connect.php';
?>
        <main>
            <form action="./connect/insert-artikel.php" method="post">
                <div>
                    <label for="artikel-naam">artikelnaam</label>
                    <input type="text" name="artikelnaam">
                </div>
                <div>
                    <label for="artikel-prijs">artikelprijs</label>
                    <input type="number" step="0.01" name="artikel-prijs">
                </div>
                <input type="submit">submit
            </form>
        </main>
        <aside>
            <table>
                <tr><th>artikel</th></tr>
                <tr><th>prijs</th></tr>
                <?php
                    $sql_artikel = "SELECT * from artikel";

                ?>
            </table>
        </aside>
    </body>
</html>