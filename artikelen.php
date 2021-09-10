<?php
    include_once 'head.php';
    include_once './connect/connect.php';
?>
<main>
    <form action="connect/insert_artikel.php" method="post">
        <div>
            <label for="artikel-naam">artikelnaam</label>
            <input type="text" name="artikel-naam">
        </div>
        <div>
            <label for="artikel-prijs">artikelprijs</label>
            <input type="number" step="0.01" name="artikel-prijs">
        </div>
        <input type="submit">
    </form>
</main>
<aside>
    <table>
        <tr>
            <th>artikel</th>
        </tr>
        <tr>
            <th>prijs</th>
        </tr>
        <?php
                    $sql_artikel = "SELECT * from artikel";
                    $result = $conn->query($sql_artikel);
                    while($row_artikel = $result -> fetch_assoc()){
                        echo '<tr><td>'.$row_artikel['artikelnaam'].'</td><td>'.$row_artikel['prijs'].'</td></tr>';
                    }
                ?>
    </table>
</aside>
</body>

</html>