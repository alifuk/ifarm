<div class="radek shadow hlavicka" style="margin-bottom: 0px; position:relative !important;  margin-top: 47px; /*border-top:1px solid #d7d6da;border-bottom:1px solid #d7d6da;*/z-index:12;
     height: 50px;
     background: rgb(22,61,127);
     background: -moz-linear-gradient(top, rgba(22,61,127,1) 1%, rgba(16,71,169,1) 68%, rgba(16,71,169,1) 100%);
     background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(22,61,127,1)), color-stop(68%,rgba(16,71,169,1)), color-stop(100%,rgba(16,71,169,1)));
     background: -webkit-linear-gradient(top, rgba(22,61,127,1) 1%,rgba(16,71,169,1) 68%,rgba(16,71,169,1) 100%);
     background: -o-linear-gradient(top, rgba(22,61,127,1) 1%,rgba(16,71,169,1) 68%,rgba(16,71,169,1) 100%);
     background: -ms-linear-gradient(top, rgba(22,61,127,1) 1%,rgba(16,71,169,1) 68%,rgba(16,71,169,1) 100%);
     background: linear-gradient(to bottom, rgba(22,61,127,1) 1%,rgba(16,71,169,1) 68%,rgba(16,71,169,1) 100%);
     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#163d7f', endColorstr='#1047a9',GradientType=0 );
     }
     ">

    <nav style="position: relative;
         left: -125px;">
        <ul>
            <li  class="bcgrenergie zenergietrans roundleft"  style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="prehled.php" style="color: white !important;">Přehled</a>

            </li>
            <li  class="bcgrenergie zenergietrans roundleft"  style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="nabidka.php" style="color: white !important;">Nabídka</a>

            </li>
            <li  class="bcgrenergie zenergietrans"    style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="poptavka.php" style="color: white !important;">Poptávka</a>

            </li>

            <li  class="bcgrenergie zenergietrans"    style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="nastaveni.php" style="color: white !important;">Nastavení</a>


            </li>



            <?php
            $strankaText = "Vytvořit web";

            $odkazMujProfil = "vytvoritWeb.php";

            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {

                $strankaText = "Profilová stránka";

                require_once './connect.php';

                $stmt = $conn->prepare("SELECT Id FROM users WHERE Id = ?");
                $stmt->bind_param('i', $user);

                $user = $_SESSION['user'];

                $stmt->execute();

                $stmt->bind_result($Id);
                $odkazMujProfil = "";
                while ($stmt->fetch()) {
                    $odkazMujProfil = "profil.php?spolecnost=" . $Id;
                }
                $stmt->close();
            }
            ?>

            <li class="bcgrenergie"  style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="<?php echo $odkazMujProfil; ?>" style="color: white !important;"><?php echo $strankaText; ?></a>
                <!--
                <div class="category"> 
                    <ul style="margin-left:50%;margin-right:auto"> 
                        <li><a href="/c133407-superfood" class="superfood" style="color:black">Nabídka 1</a></li> 
                        <li><a href="/c133411-bezlepkove-vyrobky" class="bezlepkove-vyrobky" style="color:black">Nabídka 2</a></li> 
                        <li><a href="/c133549-bezlaktozove-vyrobky" class="bezlaktozy" style="color:black">Nabídka 3</a></li> 
                        <li><a href="/c133405-raw" class="raw" style="color:black">Nabídka 4</a></li> 
                    </ul> 
                </div>
                -->
            </li>

            <li class="bcgrenergie"   style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="#kolik" style="color: white !important;">Dotace</a>

            </li>

            <!--
            
            <li class="bcgrenergie zenergietrans"   style="border:0px solid #d7d6da;background: transparent !important;margin-top: 0%;"><a href="#" style="color: black !important;">
                    
                    <div class="searchform large-12 medium-12 small-12">
                        <meta itemprop="url" content="#">
                        <form class="search-whisperer-wrap-v1 search-whisperer-wrap" action="#" method="post" itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction">
                            <fieldset>
                                <meta itemprop="target" content="#">
                                <div class="large-8 medium-8 small-12 left">
                                    <input type="hidden" name="language" value="cs">
                                    <input type="search" name="string" itemprop="query-input" class="s-word" placeholder="Hledat.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hledat...'" autocomplete="off" style="margin-top: -16px;height: 50px;">
                                </div>
                                <div class="tar large-4 medium-4 small-2 left b-search-wrap">
                                    <input type="submit" value="Hledat" class="b-search tiny button" style="color: white;
                                           background: transparent;
                                           border: 0px;
                                           width: 41%;
                                           height: 50px;
                                           position: relative;
                                           left: 160px;
                                           top: -50px;">
                                </div>
                                <div class="search-whisperer-container-js"></div>
                                <div class="search-notice large-12 medium-12 small-12"></div>
                            </fieldset>
                        </form>
                    </div>

                </a>
            </li>
            
            -->
        </ul>			
    </nav>

</div>

