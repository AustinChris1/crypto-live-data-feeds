<?php include "message.php"; ?>
<?php
$key = "85e5fd26a280747843d2ebe6e68cdad7";
$link = "http://api.marketstack.com/v1/currencies?access_key=".$key;

$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $link);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result =json_decode($result,true);
// echo"<pre>";
// print_r($result);
        foreach($result['data'] as $key){
            echo "Currency name: ".$key['name'];
            echo "<br/>";
            echo "Currency code: ".$key['code'];
            echo "<br/>";
            echo "Currency Symbol: ".$key['symbol'];
            echo "<br/><br/><br/>";

        }
exit();
    
    ?>

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
