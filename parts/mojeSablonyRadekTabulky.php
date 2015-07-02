<!--  parts/mojeSablonyRadekTabulky.php -->


<tr style="cursor: pointer;">
    <td><?php echo "P".$polozkaId; ?></td>
    <td><?php echo $kategorieName; ?></td>
    <td <?php if($pocetNabidek != 0) echo "class='info'";?> ><?php echo $pocetNabidek; ?></td>
    <td><?php echo $polozkaDatum; ?></td>
    <td>Duplikovat</td>
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


