<?php
if(isset($_POST['convert'])){
    $from = $_POST['from_currency'];
    $to = $_POST['to_currency'];
    $amount = $_POST['amount'];

    $string = $from ."_".$to;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://free.currencyconverterapi.com/api/v5/convert?q=$string&compact=ultra",
        CURLOPT_RETURNTRANSFER => 1
    ));

    $response = curl_exec($curl);
    echo "<pre>";
    print_r($response);
    $response = json_decode($response, true);
    $rate = $response[$string];
    $total = $rate * $amount;
}


include "message.php";
?>
<form action="" method="post">
    <div class="form-group">
<!-- <label for="">From</label> -->
<select name="from_currency" class="form-control">
<option name="from" value="GBP" class="form-control">GBP</option>
<option name="from" value="USD" class="form-control">USD</option>
<option name="from" value="NGN" class="form-control">NGN</option>
<option name="from" value="CAD" class="form-control">CAD</option>
</select>

<select name="to_currency" class="form-control">
<option name="to" value="USD" class="form-control">USD</option>
<option name="to" value="GBP" class="form-control">GBP</option>
<option name="to" value="NGN" class="form-control">NGN</option>
<option name="to" value="CAD" class="form-control">CAD</option>
</select>

    <!-- <label for="">To</label>
    <input type="text" name="to" class="form-control"> -->

    <label for="">Amount</label>
    <input type="text" name="amount" class="form-control">
</div>
<input type="submit" value="Convert" name="convert" class="btn btn-success">
</form>
<?php
include "footer.php";

?>