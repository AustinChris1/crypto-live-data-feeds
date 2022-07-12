
<?php include "message.php"; ?>
<?php
$key = "7db5083fb8e1c7e17a65b9d369d0f54d";
$link = "http://api.coinlayer.com/api/live?access_key=".$key;

$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $link);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result =json_decode($result,true);
echo"<pre>";
print_r($result);
if(isset($result['success'])){
    $time = date("d F Y, h:i A", $result["timestamp"]);
    echo "<h2> Price for ". $time ."</h2> </br>";
    if($result['success']==1){
            $_SESSION['message'] = "Success";
foreach($result['rates'] as $key=>$val){
            echo $key.": ".$val;
            echo "<br/>";
        }
    }else{
        echo $result['error']['type'];
        if(isset($result['error']['info'])){
            echo $result['error']['info'];
        }
    }
}else{
    $_SESSION["message"] = "Something went wrong!";
    exit();
}
    
    ?>

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
