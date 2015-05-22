
        
<div class="jumbotron">
    <div class="container" style="max-width:500px;">
        <h1>Přihlášení </h1>
        <hr>
        <form action="./queries/login.php" method="POST" class="form-horizontal register" id="login">

            <div class="form-group" >
                <label for="EmailFieldL" class="col-md-3 control-label">Email:</label>

                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Vložte email"  Id="EmailFieldL" autofocus
                           data-toggle="tooltip" data-placement="right" name="email">

                </div> 
            </div>

            <div class="form-group">
                <label for="PasswordFieldL" class="col-sm-3 control-label">Heslo:</label>
                <div class="col-sm-7 ">
                    <input type="password"  class="form-control" placeholder="Vložte heslo" Id="passwordFieldL" name="heslo">                           
                </div>
            </div>  

            <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('login').submit();"> Přihlásit</submit>
        </form>
    </div>



</div>



