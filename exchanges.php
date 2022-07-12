<?php include "message.php"; ?>
<?php
$key = "85e5fd26a280747843d2ebe6e68cdad7";
$link = "http://api.marketstack.com/v1/exchanges?access_key=".$key;

$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $link);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result =json_decode($result,true);
// echo"<pre>";
// print_r($result);
        foreach($result['data'] as $key){
            echo "Exchange name: ".$key['name'];
            echo "<br/>";
            echo "Exchange acronym: ".$key['acronym'];
            echo "<br/>";
            echo "Exchange country: ".$key['country'];
            echo "<br/>";
            echo "Exchange city: ".$key['city'];
            echo "<br/>";
            echo "Exchange website: <a href='".$key['website']."'>".$key['acronym']."</a>";
            echo "<br/>";
            echo "Exchange timezone: ".$key['timezone']['timezone'];
            echo "<br/>";
            echo "Exchange Currency: ".$key['currency']['name'];
         
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
