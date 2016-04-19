<?php
require_once "game.php";

$warrior = new warrior(100,10);
$warrior->setPowerHit(1.4);


$healer = new healer(120,8); 
$healer->setRestoreHp(20);
echo "<pre>";
print_r($healer);
print_r($warrior);
?>
<a href="#" onclick="$warrior->attack($healer)" class="actionbutton">Attack</a>
<?php
echo "<pre>";
print_r($healer);
print_r($warrior);
?>
<button type="button">Click Me</button>
<p></p>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

            $.ajax({
                type: 'POST',
                url: 'game.php',
                success: function(data) {
                    alert(data);
                    $("p").text(data);

                }
            });
   });
});

</script>
