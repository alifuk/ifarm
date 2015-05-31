

<script>
    $(document).ready(function () {


        $("#hledaniKategorii").change(function () {
            //alert("sdsssf");
            $.post("./queries/nalezeniKategorie.php",
                    {
                        nazev: $("#hledaniKategorii").val(),
                    },
            function (data, status) {
                //alert("sdf");
               
                $("#naseptavacKategorie").html(data);
                
                
            });


        });

    });




</script>


<form class="form-inline " role="search" style="position: relative; display: inline-block; margin: 0 auto; width: 300px;">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Hledání kategori" id="hledaniKategorii">
    </div>
    <div style=" position: relative; top: 40px; background-color: #F00; width: 300px;" id="naseptavacKategorie">



    </div>

    <!-- <button type="submit" class="btn btn-default">P</button> -->
</form>



