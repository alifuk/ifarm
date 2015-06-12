<div class="jumbotron">
    <div class="container" style="max-width:600px;">
        <h1>Kontaktní údaje </h1>
        <hr>
        <form action="./queries/editProfile.php" method="POST" class="form-horizontal register" id="editProfileForm">

            <div class="form-group" >
                <label for="jmeno" class="col-md-3 control-label">Jméno a příjmení:</label>

                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Vložte jméno a příjmení"  Id="jmeno"
                           data-toggle="tooltip" data-placement="right" name="jmeno" value='<?php echo $jmeno; ?>'>
                </div> 
            </div>



            <div class="form-group">
                <label for="telefon" class="col-sm-3 control-label">Telefon:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Vložte telefon" Id="telefon" name="telefon" value='<?php echo $telefon; ?>'>                           
                </div>
            </div> 

            <div class="form-group">
                <label for="adresa1" class="col-sm-3 control-label">Fakturační adresa:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Napište celou adresu např. Uranová 2011 Česká Lípa 470 01" 
                           Id="adresa1" name="adresa1" value='<?php echo $adresa1; ?>'>                           
                </div>
            </div> 

            <div class="checkbox"  >
                <label>
                    <input type="checkbox" id="zobrazitAdresu2">Provozní adresa je jiná, než Fakturační adresa
                </label>
            </div>

            <div class="form-group" id="fakturacniAdresa">
                <label for="adresa2" class="col-sm-3 control-label">Provozní adresa:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Napište celou adresu např. Uranová 2011 Česká Lípa 470 01" 
                           Id="adresa2" name="adresa2" value='<?php echo $adresa2; ?>'>                           
                </div>
            </div> 


            <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('editProfileForm').submit();"> Uložit údaje</submit>
        </form>
    </div>



</div>

<script>

    $("#fakturacniAdresa").toggle();

    $("#zobrazitAdresu2").click(function () {
        $("#fakturacniAdresa").toggle();       
        
    });



</script>


