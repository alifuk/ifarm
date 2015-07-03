<!--  parts/mojeSablonyRadekTabulky.php -->


<tr style="cursor: pointer;" onclick="window.location.href = './nabidka.php?nabidnout=<?php echo $polozkaId; ?>';">
    <td><?php echo "P".$polozkaId; ?></td>
    <td><?php echo $kategorieName; ?></td>
    <td><?php echo $polozkaDatum; ?></td>
    <td class="bluebutton" >Zobrazit poptávku</td>
</tr>



<!--
<div class="radek-1">
<div class="pole nazev"><?php echo $kategorieName; ?></div>
<div class="pole">Poptávky <strong>(3)</strong></div>
<div class="pole"><?php echo $polozkaDatum; ?></div>
<div class="pole ibutton ceaser duplikace">Duplikovat</div>
</div>

-->

<!-- <a href='./queries/zobrazeniSablony.php?polozkaId=".$polozkaId."' target='_blank'>".$kategorieName. " " . $polozkaDatum."</a><br>  -->


