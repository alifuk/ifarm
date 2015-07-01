
<h1>Nastavení </h1>
<hr>
<div class="form-horizontal">
    <div class="form-group" >
        <label for="jmeno" class="col-md-3 control-label">Jméno a příjmení:</label>

        <div class="col-sm-7">
            <input type="text" class="form-control" placeholder="Vložte jméno a příjmení"  Id="jmeno" value='<?php echo $jmeno; ?>'>
        </div> 
    </div>



    <div class="form-group">
        <label for="telefon" class="col-sm-3 control-label">Telefon:</label>
        <div class="col-sm-7 ">
            <input type="text"  class="form-control" placeholder="Vložte telefon" Id="telefon" value='<?php echo $telefon; ?>'>                           
        </div>
    </div> 

    <div class="form-group">
        <label for="adresa1" class="col-sm-3 control-label">Fakturační adresa:</label>
        <div class="col-sm-7 ">
            <input type="text"  class="form-control" placeholder="Napište celou adresu např. Uranová 2011 Česká Lípa 470 01" 
                   Id="adresa1" value='<?php echo $adresa1; ?>'>                           
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
                   Id="adresa2" value='<?php echo $adresa2; ?>'>                           
        </div>
    </div> 


</div>




<script>

    $("#fakturacniAdresa").hide();

    $("#zobrazitAdresu2").click(function () {
        $("#fakturacniAdresa").toggle();

    });



</script>


