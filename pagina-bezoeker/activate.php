<?php
if(!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6">
            <form action="./index.php?content=activate-script" method="post">
                <div class="form-group">
                    <label for="exampleInputWachtwoord">Kies een nieuw wachtwoord</label>
                    <input type="Wachtwoord" class="form-control" id="exampleInputEmail1" name="Wachtwoord" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Kies een veilig wachtwoord</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputWachtwoord">Herhaal het wachtwoord</label>
                    <input type="Wachtwoordcheck" class="form-control" id="exampleInputEmail1" name="Wachtwoordcheck" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Kies een veilig wachtwoord</small>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-primary">Verander wachtwoord</button>
            </form>
        </div>
    </div>
</div>