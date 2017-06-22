@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?=$count = DB::table('invoice_item')->where(['status'=>1])->count();?></div>
                                    <div>Total Invoice</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><? $total = DB::table('invoice_item')->sum('product_round_total'); echo number_format($total,2);?></div>
                                    <div>Total Amount</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?=$count_customer = DB::table('customer')->where(['status'=>1])->count();?></div>
                                    <div>Customers</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?=$count_product = DB::table('product_item')->where(['status'=>1])->count();?></div>
                                    <div>Product</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6 clear-right-padding">
                <div class="view-info">
                <div class="view-info-content" style="min-height: 300px;">
                <h3 class="lead">Portfolio at Risk</h3>
                <script type="text/javascript">
                $(function () {

                $('#portfolio_at_risk_chart').highcharts({
                chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
                },
                exporting: {
                enabled: false
                },

                credits: {
                enabled: false
                },

                title: {
                text: ''
                },
                tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %<br>Amount : {point.y:.1f}',
                style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
                }
                }
                },
                series: [{
                type: 'pie',
                data: [['Current' ,4261444.00],['1-30 days late' ,3588996.00]]
                }]
                });
                });
                </script>
                <div id="portfolio_at_risk_chart"></div>
                </div>
                </div>
                </div>
              <div class="col-md-6"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                @section ('pane2_panel_title', 'Customer wise Invoice List')
                @section ('pane2_panel_body')

                    <!-- /.panel -->
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Product Name</th>
                    <th>Inovice Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                          $query=DB::table('invoice_item')->where(['status'=>1])->get();                          //print_r($query);
                          foreach ($query as $query_val)
                          {
                              $customer_id=$query_val->customer_id;
                              $customer_name=DB::table('customer')->where(['customer_id'=>$customer_id,'status'=>1])->get(); //print_r($customer_name);
                              foreach ($customer_name as $cust)
                              {
                                  $client_contact_person_name=$cust->client_contact_person_name;
                                  $client_contact_person_email_ids=$cust->client_contact_person_email_ids;
                                  $client_contact_person_mobile_number=$cust->client_contact_person_mobile_number;
                              }

                             $invoice_type_id=$query_val->invoice_type_id;
                             $invoice_type = DB::table('invoice_type')->select('invoice_type_name')->where(['invoice_type_id'=>$invoice_type_id,'status'=>1])->get();
                             $invoice_type=$invoice_type[0]->invoice_type_name;

                             $product_id=$query_val->invoice_type_wise_category_id;
                             $product = DB::table('product_item')->select('product_name')->where(['invoice_type_id'=>$invoice_type_id,'status'=>1,'product_pk_id'=>$product_id])->get();                            
                             $product_name=$product[0]->product_name;
                             //$user = DB::table('users')->where('name', 'John')->first();echo $user->name; //$email = DB::table('users')->where('name', 'John')->value('email');//$users = DB::table('users')->select('name', 'email as user_email')->get();

                              
                              
                              if($invoice_type_id == '1')
                                    $class="class=text-success";
                              else if($invoice_type_id == '2')
                                    $class="class=text-info";
                              else if($invoice_type_id == '3')
                                    $class="class=text-warning";
                              
                             echo '<tr >
                                    <td>'.$client_contact_person_name.'<BR><span '.$class.'><strong>'.$invoice_type.'</strong></span></td>
                                    <td>'.$product_name.'</td>
                                    <td>'.date('d-m-Y',$query_val->invoice_date).'</td>
                                    <td>'.number_format($query_val->product_round_total,2) .'</td>
                                    <td>
                                        <div class="pull-left">
                                            <a href="" class="btn btn-success btn-sm glyphicon glyphicon glyphicon-eye-open" data-toggle="tooltip" title="" rel="tooltip" data-original-title="View '.$client_contact_person_name.' Customer Invoice Profile"></a>
                                         </div>
                                     </td>
                                    </tr>';
                          }
 //$data = DB::table("click")->select(DB::raw("SUM(numberofclick) as count"))->orderBy("created_at")->groupBy(DB::raw("year(created_at)"))->get();
                        ?>
<!---<div class="row pull-right">
<a href="" class="btn btn-success btn-sm glyphicon glyphicon glyphicon-eye-open" data-toggle="tooltip" title="" rel="tooltip" data-original-title="View checkgrp Groups Profile"></a>
<a href="" class="btn btn-info btn-sm glyphicon glyphicon-edit" data-toggle="tooltip" title="" rel="tooltip" data-original-title="Edit checkgrp group Profile"></a>
<a class="btn btn-warning btn-sm glyphicon glyphicon-remove-circle" data-toggle="tooltip" title="" onclick="" name="2" id="active91" rel="tooltip" data-original-title="Deactivate checkgrp Groups"></a>
<a onclick="" id="delete91" class="btn btn-default btn-sm glyphicon glyphicon-trash" data-toggle="tooltip" title="" rel="tooltip" data-original-title="Delete checkgrp Groups"></a>
</div>---->
                    </tbody>
                    </table>
                        <!-- /.panel-body -->

                    <!-- /.panel -->
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                </div>
                <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))
                </div>

                <!-- /.col-lg-4 -->

@stop
<!-------  <div class="col-md-6 clear-right-padding">
                    <div class="view-info">
                        <div class="view-info-content" style="min-height: 300px;">
                            <h3 class="lead">Portfolio at Risk</h3>
                            <script type="text/javascript">
                            	$(function () {
									$('#portfolio_at_risk_chart').highcharts({
										chart: {
											plotBackgroundColor: null,
											plotBorderWidth: null,
											plotShadow: false
										},
										exporting: {
											enabled: false
										},

										credits: {
											enabled: false
										},

										title: {
											text: ''
										},
										tooltip: {
											pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
										},
										plotOptions: {
											pie: {
													allowPointSelect: true,
													cursor: 'pointer',
													dataLabels: {
															enabled: true,
															format: '<b>{point.name}</b>: {point.percentage:.1f} %<br>Amount : {point.y:.1f}',
															style: {
																	color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
															}
													}
											}
										},
										series: [{
											type: 'pie',
                                                                                        name: 'Federation',
											data: [...portfolio_at_risk]
										},
                                                                                {
                                                                                    type:'pie',
                                                                                    name: 'Cluster',
                                                                                    data:[...$portfolio_at_risk]
                                                                                }
                                                                            ]
									});
								});
                            </script>
							
								<div id="portfolio_at_risk_chart"></div>
							
								<br><br><br><center><span class="text-muted">Record Not Found!</span></center>
							
                        </div>
                    </div>
                </div>-------->
<?
/*$select_portofio_at_risk = mysql_query("SELECT sum(current_amt)as current_amt,sum(1_30_days_amt)as 1_30_days_amt,sum(30_60_days_amt) as 30_60_days_amt,
sum(60_90_days_amt)as 60_90_days_amt,sum(90_120_days_amt)as 90_120_days_amt,sum(120_above_amt)as 120_above_amt
FROM crons_super_report WHERE to_level_type=$user_level_id AND  to_level_id = $user_for", $link_client_reports_database);
//		$select_portofio_at_risk = mysql_query("SELECT * FROM crons_branchoffice_par WHERE branch_id = $user_for", $link_client_reports_database);
$common_array = array ();
while($row_portofio_at_risk = mysql_fetch_array($select_portofio_at_risk))
{


$_1_30day['current']        = "["."'".'Current'."'".','.$row_portofio_at_risk['current_amt']."]";
$_1_30day['1_30_days']      = "["."'".'1_30_days'."'".','.$row_portofio_at_risk['1_30_days_amt']."]";
$_30_60day['30_60_days']    = "["."'".'30_60_days'."'".','.$row_portofio_at_risk['30_60_days_amt']."]";
$_60_90day['60_90_days']    = "["."'".'60_90_days'."'".','.$row_portofio_at_risk['60_90_days_amt']."]";
$_90_120day['90_120_days']  = "["."'".'90_120_days'."'".','.$row_portofio_at_risk['90_120_days_amt']."]";
$_above_120day['120_above'] = "["."'".'120_above'."'".','.$row_portofio_at_risk['120_above_amt']."]";

array_push($common_array,$_1_30day['current']);
array_push($common_array,$_1_30day['1_30_days']);
array_push($common_array,$_30_60day['30_60_days']);
array_push($common_array,$_60_90day['60_90_days']);
array_push($common_array,$_90_120day['90_120_days']);
array_push($common_array,$_above_120day['120_above']);


}

if(is_array($common_array))
$portfolio_at_risk = implode(',', $common_array);*/
?>