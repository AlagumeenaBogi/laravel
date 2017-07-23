<html>
<head>
<meta charset="utf-8">
<title>WCF Client</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="row"><h1 align="center">Shipping Report</h1></div>


<?php 
set_time_limit(0);
$url="http://52.40.87.111/MobileAPI/mobileappapis";
$data = array("method" => "completed_shipment_details","data"=>(array( "username" => "dongbu")));                                                                    
$data_string = json_encode($data);                                                                                                              
$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                                                                                                                                       
$result = curl_exec($ch);# Print response.//echo "<pre>$result</pre>";
$b = json_decode($result);//echo $b."<BR>";//echo "<pre>";print_r($b);

    if (count($b->value)) 
    {
        
        foreach ($b->value as $idx => $stand)
        {            //echo "<pre>";print_r($stand);
            $j=1;
            foreach ($b->value->details as $key => $valuse)
            {
                foreach ($valuse->product_image as $key => $valuses)
                {
                   $image=$valuses;
                }
                foreach ($valuse->point_of_contact as $key => $valusess)
                {
                   $empid=$valusess;
                }
                foreach ($valuse->products as $key => $v)
                {
                   $products=$v;
                }
                foreach ($valuse->quantity as $key => $v1)
                {
                   $quantity=$v1;
                }
                foreach ($valuse->rate as $key => $v2)
                {
                   $rate=$v2;
                }
                foreach ($valuse->amount as $key => $v3)
                {
                   $amount=$v3;
                }
             echo '<div class="well">
                        <div class="row">

                        <div class="col-sm-12">
                            <h4>'.$j.' .Shipment No <span class="label label-default">'.$valuse->shipment_no.'</span></h4>
                            <div class="col-sm-6"> <label>Proforma Invoice Date - <span class="text-success">No:  </span ></label>'.$valuse->proforma_invoice_date.'  - <span class="text-success">'.$valuse->proforma_invoice_no.'</span></div>
                            <div class="col-sm-6"> <label>Invoice Date - <span class="text-warning">No:  </span ></label>'.$valuse->invoice_date.' - <span class="text-warning">'.$valuse->invoice_no.'</span></div>
                        </div>

                        <div class="col-ms-12">
                            <div class="col-sm-2"> <img  src="'.$image.'"  class="img-circle" alt="Product Image" width="55%"  height="25%" > </div>
                            <div class="col-sm-4"><label>planned Shipment Date: </label>'.$valuse->planned_shipment_date.'</div>   
                            <div class="col-sm-6"><label>Point of contact - <span class="text-success">Empid:  </span></label><span class="text-success">'.$empid.'</span></div> 
                        </div> 

                        <div class="col-sm-12">
                        <div class="col-sm-3 text-muted">Products:'.$products.'</div>
                        <div class="col-sm-2 text-primary">Quantity:'.$quantity.'</div>
                        <div class="col-sm-2 text-success">Rate:'.$rate.'</div>
                        <div class="col-sm-2 text-info">Amount:'.$amount.'</div>
                        <div class="col-sm-1 text-warning">ETD:'.$valuse->etd.'</div>
                        <div class="col-sm-2 text-default">ETA:'.$valuse->eta.'</div>
                        </div>

                        </div>
                    </div';
            $j++;
            }       
    }    }
?>


</body>
</html>
