<?php
$this->load->helper("date");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Bienvenido</h1>
    </div>
</div>
<div class="row">
    <div class="adv-table col-md-6">
        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="search-table">
                <caption><i class='fa fa-birthday-cake'></i> Proximos cumpleaños</caption>
                <thead>
                    <tr>
                        <th>Cumpleaños</th>
                        <th>Nombre</th>
                        <th>Centro</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($birthdates as $p) {
                        $birthdate = new DateTime(date("Y/m/d", mysql_to_unix($p["birthdate"])));
                        $years = $birthdate->diff(new DateTime('now'))->y;
                        ?>
                        <tr>
                            <td><?php echo date("d/M ", mysql_to_unix($p["birthdate"])) . "(" . $years . " Años)" ?></td>
                            <td>
                                <?php echo ($p["gender"]) ? "<i class='fa fa-male blue'></i>" : "<i class='fa fa-female red'></i>" ?>
                                <?php echo $p["name"] ?> <?php echo ($p["nickname"]) ? '"' . $p["nickname"] . '"' : '' ?> <?php echo $p["lastname"] ?>
                            </td>
                            <td><?php echo isset($optionsCenter[$p["center"]]) ? $optionsCenter[$p["center"]] : "" ?></td>
                            <td><a href="/Persons/view/<?php echo $p["id"] ?>"><i class='fa fa-eye'></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="adv-table col-md-6">
        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="search-table">
                <caption><i class='fa fa-newspaper-o'></i> Nuevas personas</caption>
                <thead>
                    <tr>
                        <th>Ingreso</th>
                        <th>Nombre</th>
                        <th>Centro</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lastpersons as $p) {
                        $firstdate = new DateTime(date("Y/m/d", mysql_to_unix($p["firstdate"])));
                        $days = $firstdate->diff(new DateTime('now'))->d;
                        ?>
                        <tr>
                            <td><?php echo date("d/M ", mysql_to_unix($p["firstdate"])) . "(" . $days . " dias)" ?></td>
                            <td>
                                <?php echo ($p["gender"]) ? "<i class='fa fa-male blue'></i>" : "<i class='fa fa-female red'></i>" ?>
                                <?php echo $p["name"] ?> <?php echo ($p["nickname"]) ? '"' . $p["nickname"] . '"' : '' ?> <?php echo $p["lastname"] ?>
                            </td>
                            <td><?php echo isset($optionsCenter[$p["center"]]) ? $optionsCenter[$p["center"]] : "" ?></td>
                            <td><a href="/Persons/view/<?php echo $p["id"] ?>"><i class='fa fa-eye'></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
