<!-- boolBox.php odkazováno z queries/nabidky.php   -->

<div class="checkbox">
    <label class="checkbox">
        <input type="checkbox" name=<?php echo $IdDefinice; ?>
               
               <?php 
               
               if(isset($hodnota)){
                   echo 'checked';
               }
               ?>
               > <?php echo $nazev; ?>
    </label>
</div>
