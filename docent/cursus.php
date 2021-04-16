<?php
include("./scripts/connect_db.php");

$sql="SELECT `cursus`.*,`opleiding`.`naam` FROM `opleiding`,`cursus` WHERE `cursus` . `opleiding_id` = `opleiding` .`id_opleiding` ";

$result = mysqli_query($conn,$sql);

$tbl_rows = "";
while($record = mysqli_fetch_assoc($result))
{
 $tbl_rows .= "
                <tr>
                    <th scope='row'>{$record['cursusid']}</th>
                    <td>{$record['vak']}</td>
                    <td>{$record['cursus']}</td>
                    <td>{$record['naam']}</td>
                    <td>{$record['semester']}</td>
                    <td>{$record['periode']}</td>
                    <td>{$record['cohort']}</td>
                    <td>
                        <a href='./index.php?content=update_cursus&id=" . $record["cursusid"] . "'>
                            <img src='./img/icon/b_edit.png' alt='pencil'>
                        </a>
                    </td>
                    <td>
                        <a href='./index.php?content=delete_cursus&id=" . $record["cursusid"] ."'>     
                            <img src='./img/icon/b_drop.png' alt='pencil'>
                        </a>
                    </td>
                </tr>
 ";
}
// .php?id=" . $record["cursusid"] . 
?>



<div class="home-opbouw">
    <div class="row">
        <div class="col-12">
            <a type="button" href="./index.php?content=cursus_toevoegen" class="btn btn-success btn-md btn-block">cursus toevoegen</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">vak</th>
                        <th scope="col">cursus</th>
                        <th scope="col">opleiding</th>
                        <th scope="col">semester</th>
                        <th scope="col">periode</th>
                        <th scope="col">cohort</th>
                        <th scope="col">bewerken</th>
                        <th scope="col">verwijderen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        echo $tbl_rows;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>