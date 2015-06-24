<script type="text/javascript" src="./checkboxtree/library/jquery-1.4.4.js"></script>
<script type="text/javascript" src="./checkboxtree/library/jquery-ui-1.8.12.custom/js/jquery-ui-1.8.12.custom.min.js"></script>

<script type="text/javascript" src="./checkboxtree/jquery.checkboxtree.js"></script>
<link rel="stylesheet" type="text/css" href="./checkboxtree/jquery.checkboxtree.css"/>



<ul id="tree1">
    <?php
    include_once './class/Kategorie.php';

    echo '';
    $strom = new Kategorie();
    //$strom->getSubmenu(0);
    $strom->predgenerovaneTree();
    ?>
</ul>


<input id='sendTree' type="submit" value="Odeslat">


<!--
<ul id="tree1">
    <li><input type="checkbox"><label>Node 1</label>
        <ul>
            <li><input type="checkbox"><label>Node 1.1</label>
                <ul>
                    <li><input type="checkbox" checked><label>Node 1.1.1</label>
                </ul>
        </ul>
        <ul>
            <li><input type="checkbox"><label>Node 1.2</label>
                <ul>
                    <li><input type="checkbox"><label>Node 1.2.1</label>
                    <li><input type="checkbox"><label>Node 1.2.2</label>
                    <li><input type="checkbox"><label>Node 1.2.3</label>
                        <ul>
                            <li><input type="checkbox"><label>Node 1.2.3.1</label>
                            <li><input type="checkbox"><label>Node 1.2.3.2</label>
                        </ul>
                    <li><input type="checkbox"><label>Node 1.2.4</label>
                    <li><input type="checkbox"><label>Node 1.2.5</label>
                    <li><input type="checkbox"><label>Node 1.2.6</label>
                </ul>
        </ul>
    <li><input type="checkbox"><label>Node 2</label>
        <ul>
            <li><input type="checkbox"><label>Node 2.1</label>
                <ul>
                    <li><input type="checkbox"><label>Node 2.1.1</label>
                </ul>
            <li><input type="checkbox"><label>Node 2.2</label>
                <ul>
                    <li><input type="checkbox"><label>Node 2.2.1</label>
                    <li><input type="checkbox"><label>Node 2.2.2</label>
                    <li><input type="checkbox"><label>Node 2.2.3</label>
                        <ul>
                            <li><input type="checkbox"><label>Node 2.2.3.1</label>
                            <li><input type="checkbox"><label>Node 2.2.3.2</label>
                        </ul>
                    <li><input type="checkbox"><label>Node 2.2.4</label>
                    <li><input type="checkbox"><label>Node 2.2.5</label>
                    <li><input type="checkbox"><label>Node 2.2.6</label>
                </ul>
        </ul>
</ul>

-->
<script>
    $(document).ready(function () {


        $('#tree1').checkboxTree({
            initializeChecked: 'expanded',
            initializeUnchecked: 'collapsed',
            onCheck: {
                node: 'expand'
            },
            collapseImage: './checkboxtree/images/downArrow.gif',
            expandImage: './checkboxtree/images/rightArrow.gif'
        });

<?php
$strom->generujJs();
?>

        /*$('#tree1').checkboxTree('check', $('#p9'));
         
         ('#tree1').checkboxTree('expand', $('#l9'));*/


        $("#sendTree").click(function () {
            var retezec = "";
            $("#tree1 input").each(function () {

                if ($(this).attr("checked") ) {
                    retezec = retezec + " " + $(this).attr("id");
                }

            });


            $.post("./queries/ulozitStromKategorii.php",
                    {
                        retezec: retezec,
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    });

        });




    });
</script>



