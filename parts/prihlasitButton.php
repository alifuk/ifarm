<li>
    <div id="footleft"> 
        <a id="prihlasitMenuButton" style="color:white">Přihlásit</a>  
    </div> 
</li>

<div class="registerBigWhite" style="position: fixed; width: 100%; height: 100%; display: table; background-color: rgba(255,255,255,0.9); top: 0; left: 0;">

    <div class="" style="display: table-cell; vertical-align: middle;">

        <div style="margin: 0 auto; width: 500px;">

            <!-- Red color scheme -->



            <form class="form-horizontal"method="post" action="./queries/register.php">
                <h2 style="color: #000;">Registrace</h2>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email"  placeholder="např. karel@seznam.cz">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIco" class="col-sm-2 control-label">IČO</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputIco" name="ico"  placeholder="vložte platné ičo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputHeslo" class="col-sm-2 control-label">Heslo</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputHeslo" name="heslo" placeholder="vložte heslo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-0 col-sm-12">
                        <button type="submit" class="btn btn-default">Zaregistrovat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clickaway" style="position: absolute; top:0; left: 0; width: 100%; height: 100%; z-index: 5;">

    </div>
</div>


<div class="loginBigWhite" style="position: fixed; width: 100%; height: 100%; display: table; background-color: rgba(255,255,255,0.9); top: 0; left: 0;">

    <div class="" style="display: table-cell; vertical-align: middle;">

        <div style="margin: 0 auto; width: 500px;">

            <!-- Red color scheme -->



            <form class="form-horizontal" method="post" action="./queries/login.php">
                <h2 style="color: #000;">Přihlášení</h2>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="např. karel@seznam.cz">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputHeslo" class="col-sm-2 control-label">Heslo</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputHeslo" name="heslo" placeholder="vložte heslo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-0 col-sm-12">
                        <button type="submit" class="btn btn-default">Přihlásit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="clickaway" style="position: absolute; top:0; left: 0; width: 100%; height: 100%; z-index: 5;">

    </div>

</div>



<li>
    <a style="" id="registrovatMenuButton">Registrovat</a>
</li>






<script>


    $(document).ready(function () {


        $(".loginBigWhite, .registerBigWhite").hide();


        $(".clickaway").click(function () {
            $(".loginBigWhite, .registerBigWhite").hide();


        });


        $("#prihlasitMenuButton").click(function () {
            $(".loginBigWhite").toggle();
        });

        $("#registrovatMenuButton").click(function () {
            $(".registerBigWhite").toggle();
        });



    });



</script>