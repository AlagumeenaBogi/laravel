<!DOCTYPE HTML>
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
<div class="row">
  <h1 align="center">Shipping Report</h1></div>
  <div id="location"></div>
  
</div>
<!----https://www.sitepoint.com/community/t/how-to-properly-populate-html-table-with-jquery-ajax-using-json-formatted-data/202187/6----->
<script>

$(document).ready(function(){

    jQuery.support.cors = true;

    $.ajax(
    {
        type: "GET",
       url:"http://localhost/learning_taks/shippings.json",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        cache: false,
        success: function (data) {
            var trHTML = {};
    $.each(data.details, function (i, item) {
        var j=i+1;
      // trHTML += '<tr><td>' + item.shipment_no + '</td><td>' + item.proforma_invoice_no + '</td><td>' + item.proforma_invoice_date+ '</td> <td>' + item.invoice_no + '</td><td>' + item.invoice_date + '</td><td>' + item.planned_shipment_date + '</td><td>' + item.etd + '</td><td>' + item.eta+ '</td> <td>' + item.statuss+ '</td><td>' + item.point_of_contact['empid'] + '</td></tr>';
trHTML+='<div class="well"><div class="row"><div class="col-sm-12"><h4>'+j+'.Shipment No <span class="label label-default">'+ item.shipment_no +'</span></h4><div class="col-sm-6"> <label>Proforma Invoice Date - <span class="text-success">No:  </span ></label>'+item.proforma_invoice_date+'  - <span class="text-success">'+item.proforma_invoice_no+'</span></div><div class="col-sm-6"> <label>Invoice Date - <span class="text-warning">No:  </span ></label>'+item.invoice_date+' - <span class="text-warning">'+item.invoice_no+'</span></div></div><div class="col-ms-12"><div class="col-sm-2"><img src="'+item.product_image['0']+'"  class="img-circle" alt="Product Image" width="55%"  height="45%"></div><div class="col-sm-4"><label>planned Shipment Date: </label>'+item.planned_shipment_date+'</div>   <div class="col-sm-6"><label>Point of contact - <span class="text-success">Empid:  </span></label><span class="text-success">'+item.point_of_contact['empid']+'</span></div>  </div>  </div> <div class="col-sm-12"><div class="col-sm-1 text-muted">Products:'+item.products['0']+'</div><div class="col-sm-3 text-primary">Quantity:'+item.quantity['0']+'</div><div class="col-sm-2 text-success">Rate:'+item.rate['0']+'</div><div class="col-sm-2 text-info">Amount:'+item.amount['0']+'</div><div class="col-sm-2 text-warning">ETD:'+item.etd+'</div><div class="col-sm-2 text-default">ETA:'+item.eta+'</div></div></div>';
        });
  
        $('#location').append(trHTML);
        
        },
        
        error: function (msg) {
            
            alert(msg.responseText);
        }
    });
})

</script>

</body>
</html>