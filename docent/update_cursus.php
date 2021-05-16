<?php
include("./scripts/connect_db.php");
include("./scripts/functions.php");

$id = sanitize($_GET["id"]);

$sql = "SELECT `cursus` . *, `opleiding`.`naam` 
        FROM `opleiding`, `cursus`
        WHERE `cursus` . `opleiding_id` = `opleiding` . `id_opleiding`
        AND `cursus` . `cursusid` = {$id}";

$result = mysqli_query($conn,$sql);

$record = mysqli_fetch_assoc($result);

?>

<div class="home-opbouw">
    <div class="row">
        <div class="col-12">
            <h3>cursus:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="./index.php?content=update_cursus_script" method="post">
                <label for="Inputvak">vak</label>
                <br>
                <input name="vak" type="text" class="email" id="Inputvak" aria-describedby="vakhelp" value="<?php echo $record['vak'] ?>"autofocus>
                <br>
                <label for="Inputcursus">cursus</label>
                <br>
                <input name="cursus" type="text" class="email" id="Inputcurus" aria-describedby="curushelp" value="<?php echo $record['cursus'] ?>" autofocus>
                <br>
                <label class="label" for="tijdsloten">opleiding</label>
                <br>
                <select id="opleiding"  name="opleiding">
                    <option value="1" <?php ($record["opleiding_id"] ==1) ?"selected":""; ?>>Software-developer</option>
                    <option value="2" <?php ($record["opleiding_id"] ==2) ?"selected":""; ?>>Applicatieontwikkeling</option>
                </select>
                <br>
                <label class="label" for="semester">semester</label>
                <br>
                <select id="semester"  name="semester">
                    <option value="1" <?php ($record["semester"] ==1) ?"selected":""; ?>>S1</option>
                    <option value="2" <?php ($record["semester"] ==2) ?"selected":""; ?>>S2</option>
                </select>
                <br>
                <label class="label" for="tijdsloten">periode</label>
                <br>
                <select id="periode"  name="periode">
                    <option value="1" <?php ($record["periode"] ==1) ?"selected":""; ?>>p1</option>
                    <option value="2" <?php ($record["periode"] ==2) ?"selected":""; ?>>p2</option>
                    <option value="3" <?php ($record["periode"] ==3) ?"selected":""; ?>>p3</option>
                    <option value="4" <?php ($record["periode"] ==4) ?"selected":""; ?>>p4</option>
                </select>
                <br>
                <label class="label" for="tijdsloten">cohort</label>
                <br>
                <select id="cohort"  name="cohort">
                    <option value="2019" <?php ($record["cohort"] ==2019) ?"selected":""; ?>>2019</option>
                    <option value="2020" <?php ($record["cohort"] ==2020) ?"selected":""; ?>>2020</option>
                    <option value="2021" <?php ($record["cohort"] ==2021) ?"selected":""; ?>>2021</option>
                </select>
                <br>
                <br>	
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" class="button-form1">cursus updaten</button>
            </form>
        </div>
    </div>
</div>