
<?php

header("Content-type: text/xml");
echo file_get_contents("http://api.mapy.cz/geocode?" . $_SERVER["QUERY_STRING"]);

?>





$("#category-filter-hover").css("top", $("#categories").offset().top + $("#categories").height() - 100); 