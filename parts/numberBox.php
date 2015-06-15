<!-- numberBox.php odkazováno z queries/nabidky.php   -->
<div class="form-group" >
    <label for='<?php echo $nazev . ""; ?>' ><?php echo $nazev; ?>:</label>
    <div class="input-group col-xs-6">
        <input type="text" class="form-control" placeholder='<?php //echo "zadejte ".$nazev;  ?>' id='<?php echo $nazev . "Field"; ?>' name='<?php echo $IdDefinice; ?>' 
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


<!--
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
  </div>

-->