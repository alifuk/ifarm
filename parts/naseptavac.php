

<script>
    $(document).ready(function () {


        $(".naseptavacKategorie").hide();
        $("#hledaniKategorii").change(function () {
            if ( $("#hledaniKategorii").val().length >= 2) {
                
                $.post("./queries/nalezeniKategorie.php",
                        {
                            nazev: $("#hledaniKategorii").val(),
                        },
                        function (data, status) {
                            $(".naseptavacKategorie").show();
                            $(".vysledkyHledani").html(data);
                        });
            }



        });

        $(".zavritVyhledane").click(function () {
            $(".naseptavacKategorie").hide();
        });

    });




</script>


<form class="form-inline " role="search" style="position: relative; display: inline-block; margin: 0 auto 9px; width: 300px;">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Hledání kategorií" id="hledaniKategorii" style="width: 199px;">
        <img src="./img/Search.png" style="display: block;  width: 28px;  position: absolute;  top: 2px;  left: 167px;  cursor: pointer;"  >
    </div>
    <div style=" position: absolute; top: 0px; width: 250px; left:220px; z-index: 3; " class="naseptavacKategorie">
        <div style="margin:5px; color: #FFF;">
            Výsledky hledání <span class="zavritVyhledane" style="float: right; cursor: pointer;">Zavřít X</span>
        </div>
        <div class="vysledkyHledani" style="color: #FFF;">

        </div>

    </div>

    <!-- <button type="submit" class="btn btn-default">P</button> -->
</form>



