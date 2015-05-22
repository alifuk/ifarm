<script>
    $(document).ready(function() {
        $("#ajax_loader").hide();
        $('#ico').change( function() {
                // zobrazíme obrázek s loaderem
                $("#ajax_loader").show();
                var ico = $(this).val();
                $.ajax({
                        url: "./queries/ares.php",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json", 
                        data: "ico="+ico,
                        cache: false,
                        success: function(data) {
                                $("#ajax_loader").hide();
                                if (data.stav == 'ok') {
                                        $('#dic').val(data.dic);                // DIČ
                                        $('#nazevFirmy').val(data.firma);    // název firmy
                                        $('#adresaFirmy').val(data.ulice);    // ulice včetně čísla popisného
                                        $('#mesto').val(data.mesto);    // město
                                        /*$('#psc').val(data.psc);                // PSČ
                                        if (data.jmeno!='') {
                                                $("#jmeno").val(data.jmeno);    // jméno když máme živnostníka
                                        }
                                        if (data.prijmeni!='') {
                                                $("#prijmeni").val(data.prijmeni);      // příjmení když máme živnostníka
                                        }*/
                                        //alert('Název a sídlo firmy bylo vyplněno z databáze ARES.');
                                } else {
                                        //alert(data.stav);
                                        //console.log(data);
                                }
                        },
                        error: function(data, errorThrown) {
                                alert('Požadavek selhal: '+errorThrown);
                        }
          });
        });
});
    
    
</script>
        
<div class="jumbotron">
    <div class="container" style="max-width:500px;">
        <h1>ARES </h1>
        <hr>
        <form action="./queries/login.php" method="POST" class="form-horizontal register" id="login">

            <div class="form-group" >
                <label for="ico" class="col-md-3 control-label">IČO:</label>

                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Vložte email"  Id="ico" autofocus
                           data-toggle="tooltip" data-placement="right" name="email">

                </div> 
            </div>

            
            <div class="form-group">
                <label for="dic" class="col-sm-3 control-label">DIČ:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="DIČ" Id="dic">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="nazevFirmy" class="col-sm-3 control-label">Název firmy:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Název firmy" Id="nazevFirmy">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="adresaFirmy" class="col-sm-3 control-label">Adresa firmy:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Adresa firmy" Id="adresaFirmy">                           
                </div>
            </div> 
            
            <div class="form-group">
                <label for="mesto" class="col-sm-3 control-label">Město:</label>
                <div class="col-sm-7 ">
                    <input type="text"  class="form-control" placeholder="Město" Id="mesto">                           
                </div>
            </div> 

            <!-- <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('login').submit();"> Přihlásit</submit> -->
        </form>
    </div>



</div>


<div id="ajax_loader">
    Načítám
</div>
    



