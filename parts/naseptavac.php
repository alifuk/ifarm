

<script>
    $(document).ready(function () {


        $(".naseptavacKategorie").hide();
        $("#hledaniKategorii").change(function () {
            $.post("./queries/nalezeniKategorie.php",
                    {
                        nazev: $("#hledaniKategorii").val(),
                    },
                    function (data, status) {
                        $(".naseptavacKategorie").show();
                        $(".naseptavacKategorie").html(data);


                    });


        });

    });




</script>


<form class="form-inline " role="search" style="position: relative; display: inline-block; margin: 0 auto 9px; width: 300px;">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Hledání kategorií" id="hledaniKategorii" style="width: 199px;">
    </div>
    <div style=" position: absolute; top: 0px; width: 250px; left:220px; z-index: 3;" class="naseptavacKategorie">



    </div>

    <!-- <button type="submit" class="btn btn-default">P</button> -->
</form>



