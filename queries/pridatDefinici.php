<?php

require_once '../connect.php';

session_start();
                
                

$stmt = $conn->prepare('INSERT INTO definiceparametru (kategorieId,parametr_s_1,parametr_s_2,parametr_s_3,parametr_s_4,parametr_s_5,parametr_s_6,parametr_s_7,parametr_s_8,parametr_s_9,parametr_s_10,parametr_i_1,parametr_i_2,parametr_i_3,parametr_i_4,parametr_i_5,parametr_i_6,parametr_i_7,parametr_i_8,parametr_i_9,parametr_i_10,parametr_b_1,parametr_b_2,parametr_b_3,parametr_b_4,parametr_b_5,parametr_b_6,parametr_b_7,parametr_b_8,parametr_b_9,parametr_b_10)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('issssssssssssssssssssssssssssss', $kategorieId, $_POST['s0'],$_POST['s1'],$_POST['s2'],$_POST['s3'],$_POST['s4'],$_POST['s5'],$_POST['s6'],$_POST['s7'],$_POST['s8'],$_POST['s9'],$_POST['s10'],$_POST['s11'],$_POST['s12'],$_POST['s13'],$_POST['s14'],$_POST['s15'],$_POST['s16'],$_POST['s17'],$_POST['s18'],$_POST['s19'],$_POST['s20'],$_POST['s21'],$_POST['s22'],$_POST['s23'],$_POST['s24'],$_POST['s25'],$_POST['s26'],$_POST['s27'],$_POST['s28'],$_POST['s29']);
$kategorieId = $_SESSION['definicekategore'];
    
$stmt->execute();

echo "úspěšně přidáno";






?>
