<div class="home-opbouw">
    <div class="row">
        <div class="col-12">
            <h3>cursus:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="./index.php?content=cursus_toevoegen_script" method="post">
                <label for="Inputvak">vak</label>
                <br>
                <input name="vak" type="text" class="email" id="Inputvak" aria-describedby="vakhelp" autofocus>
                <br>
                <label for="Inputcursus">cursus</label>
                <br>
                <input name="cursus" type="text" class="email" id="Inputcurus" aria-describedby="curushelp" autofocus>
                <br>
                <label class="label" for="tijdsloten">opleiding</label>
                <br>
                <select id="opleiding"  name="opleiding">
                    <option value="1">Software-developer</option>
                    <option value="2">Applicatieontwikkeling</option>
                </select>
                <br>
                <label class="label" for="semester">semester</label>
                <br>
                <select id="semester"  name="semester">
                    <option value="1">S1</option>
                    <option value="2">S2</option>
                </select>
                <br>
                <label class="label" for="tijdsloten">periode</label>
                <br>
                <select id="periode"  name="periode">
                    <option value="1">p1</option>
                    <option value="2">p2</option>
                    <option value="3">p3</option>
                    <option value="4">p4</option>
                </select>
                <br>
                <label class="label" for="tijdsloten">cohort</label>
                <br>
                <select id="cohort"  name="cohort">
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
                <br>
                <br>	
                <button type="submit" class="button-form1">cursus toevoegen</button>
            </form>
        </div>
    </div>
</div>