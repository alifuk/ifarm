<!-- volbaBox.php odkazováno z queries/nabidky.php  --> 
<div class="btn-group" >
    <!--
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle='dropdown' aria-expanded="true">
    <?php //echo $nazev; ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">

    <?php
    /* foreach (explode(",", $volby) as $volba) {
      echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">' . $volba . '</a></li>';
      } */
    ?>



        </ul>
    </div>

    -->

    <div class="form-group">
        <label for=<?php echo $nazev; ?>><?php echo $nazev; ?>:</label>
        <select class="form-control" id=<?php echo $nazev; ?> name=<?php echo $IdDefinice ?>>
            <?php
            foreach (explode(",", $volby) as $volba) {
                if (isset($hodnota) && $hodnota == $volba) {
                    echo '<option selected>' . $volba . '</option>';
                } else {
                    echo '<option>' . $volba . '</option>';
                }
            }
            ?>
        </select>
    </div>


</div>