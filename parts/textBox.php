<!-- textBox.php odkazováno z queries/nabidky.php   -->
<div class="form-group" >
    <label for='<?php echo $nazev . ""; ?>' ><?php echo $nazev; ?>:</label>
    <div class="input-group col-xs-8">
        <input type="text" class="form-control input-small" placeholder='<?php //echo "zadejte ".$nazev;  ?>' id='<?php echo $nazev . "Field"; ?>' name='<?php echo $IdDefinice; ?>' 
               
               <?php 
               
               if(isset($hodnota)){
                   echo 'value="'.$hodnota . '" ';
               }
               ?>
               
               >


        <?php
        if (trim($jednotky) != "") {
            $jednotka = explode(",", $jednotky);
            echo '<div class="input-group-addon">' . $jednotka[0] . '</div>';
        }
        ?>
    </div>

</div>
