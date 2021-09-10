<?php
    include_once 'head.php';
?>
<div class="main-wrapper">
    <form action="submit"></form>
</div>

<div class="aside-wrapper">
    <aside>
        <?php
            $winkelwagen = array();
            foreach($winkelwagen as $key=>$value){echo $value; echo $key;}
        ?>
    </aside>
</div>

</body>

</html>