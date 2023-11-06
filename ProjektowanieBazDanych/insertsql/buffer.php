<select id="Departament" name="dept">
    <?php $dept = '';
    $w_dept = mysqli_fetch_array($wyn_dept);
    $deptle = $w_dept['name'];
    ?>
    <option value=<?php printf("%s", "'" . $deptle . "'"); ?> selected><?php printf("%s", $deptle); ?></option>
    <?php
    while ($w_dept = mysqli_fetch_array($wyn_dept))
    {
        $deptle = $w_dept['name'];
        ?>
        <option value=<?php printf("%s", "'" . $deptle . "'"); ?>><?php printf("%s", $deptle); ?></option>
        <?php
    }
    ?>
</select>