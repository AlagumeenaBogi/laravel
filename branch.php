<?
include ("header.php");
require_once($branch_office_demo_functions_url."/masters/branch/add/add_branches.php");
require_once($branch_office_demo_functions_url."/accounts/default_chart_of_accounts/create_default_chart_of_accounts.php");
require_once($branch_office_demo_functions_url."/accounts/default_chart_of_accounts/create_affiliation_chart_of_accounts.php");
require_once($branch_office_demo_functions_url."/accounts/default_chart_of_accounts/create_affiliation_ledgers.php");
require_once($branch_office_demo_functions_url."/masters/account_level_name.php");
require_once($branch_office_demo_functions_url."/masters/affiliated_organization_name.php");	

											

if (isset($_POST['branch_office_submit']))
{
    $mfi_id = $_POST['mfi_id'];
    for ($i = 0; $i < count($_POST['branch_name']); $i++) {
        $branch_name = $_POST['branch_name'][$i];
        $contact_person_name = $_POST['contact_person_name'][$i];
        $mobile_number = $_POST['mobile_number'][$i];
        $branch_email = $_POST['email'][$i];
        $branch_for = "2";  
      
					$condition = "Added";
					$return_branch_id=add_branches($client_id,$user_id,$branch_for,$branch_name,$contact_person_name,$mobile_number,$branch_email,$link_client_database,$link_microfinance_global,$client_database,$microfinance_global_database,$link_ekgaon_global,$ekgaon_global_database); 
    }

    setcookie("alert", "Branch office information successfully saved", time() + 10);
    echo '<script>location.href="federation_information.php"</script>';
}
?>
<script src="<?=$branch_office_demo_application_url;?>/themes/validator/form_validation.js"></script>
<script src="<?=$branch_office_demo_application_url;?>/themes/js/add_more/addmore_field.js"></script>
<div class="page-content inset">
    <div class="row">
        <div class="col-md-12">
            <h1>MFI Account Setup</h1>
        </div>		
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible" role="alert">
                Please share your organization's institutional information, operations, affliations, communication information with the platform.
            </div>
        </div>
        <?
        include("progress_bar.php");
        ?>
        <?php $branch_office_information = "alert-info"; ?>
        <div class="col-sm-3 clear-right-padding">
            <? include ("left_menu_mfi.php"); ?>
        </div>
        <div class="col-sm-9">
            <div class="well">
                <?php
                if ($_COOKIE['alert']) {
                    $alert_value = $_COOKIE['alert'];
                    echo '<div class="alert alert-success alert_status"> ' . $alert_value . '! &nbsp; &nbsp;
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">
			    <span class="glyphicon glyphicon-remove fright cpoint"></span>
			</button>
		    </div>';
                    unset($_COOKIE['alert']);
                }
                ?>
                <form class="form-horizontal" method="post" name="branch_information_form" id="branch_information_form" action="branch_office_information.php">
		    <h2 class="view-info-underline">Branch office information</h2>
                    <?
                    $branch_status = mysql_fetch_object(mysql_query("SELECT branches FROM enquiry_setps WHERE client_id='$client_id'", $link_microfinance_global))->branches;
                    if ($branch_status == 0) {
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">While Registering microfinance.in, You mentioned in enquiry form that you organization does not have Branch Level Operations. But If you have Branch Level Operations, use this form to add your brances.</div>
			<?
		    }
		    ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">Please add your branch network information to the platform. Branch is second level of hierarchy in your network on the platform. You are required to provide branch name, contact person of the branch (for eg. Branch Manager) and his/her mobile number and email id. Please note next level of setup information would be automatically send to the branch functionaries to help them to add next level of system users. You need to add all your branch details here. Only branch added here would be available for settings accross the platform.<br/><br/>
                        <i class="fa fa-lightbulb-o"></i>
                        Adding branch help<br/><br/>If your Institution name is "ABC Financial Services Ltd" then your branch name could be "ABC Financial Services Ltd - Mumbai"</div>
                    <input type="hidden" name="mfi_id" value="<?= $mfi_id ?>" >
                    <div class="addmore_branch">
                        <h5 class="add_branch"></h5>
                        <div class="form-group">
                            <div class="col-sm-3 text_right">
                                <label class="control-label">Branch name <span class="star">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input type="text" id="branch_name" name="branch_name[]" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-sm-3 text_right">
                                <label  class="control-label" >Contact person name <span class="star">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                                    <input type="text" id="contact_person_name" name="contact_person_name[]" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-sm-3 text_right">
                                <label class="control-label" >Mobile number <span class="star">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-phone"></span>
                                    <input type="text" id="mobile_number" name="mobile_number[]" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-sm-3 text_right">
                                <label  class="control-label" >Email ID <span class="star">*</span></label>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" id="email" name="email[]" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row pull-right">
                            <a   target="_blank"    class="btn btn-default btn-xs addmore_link" onclick="addmore('addmore_branch','add_branch','addmore_link','Branch')" >
                                <i class="fa fa-plus"></i> Add More
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>





                    <div class="form-group"> </div><br>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" class="btn btn-default pull-right" name="branch_office_submit">
                                <span class="glyphicon glyphicon-ok"></span>Submit
                            </button>
                            <button type="button" onclick="location.href='federation_information.php'" class="btn btn-primary pull-right" style="margin-right:5%" name="head_office_submit" >
                                    <span class="glyphicon glyphicon-share-alt"></span>Skip
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?
include ("../footer.php");
?>
<?
include("session.php");
include("config/database_connection.php");

if($_REQUEST['country_ids']):
    $country_ids = explode(',', $_REQUEST['country_ids']);
    $i = 1;
    $inc = 0;
    while ($i <= count($country_ids)):
    $country_id = $country_ids[$i-1];
    $sel = mysql_query("SELECT * FROM states WHERE country_id='$country_id' AND status='1' ORDER BY country_id ASC", $link_ekgaon_global);
    while($fet = mysql_fetch_array($sel)):
    $inc++;
    ?>
    <div class="row">
        <div class="checkbox-inline state-lists" >
        <label><input type="checkbox" name="state[]" class="state_case" value="<?=$fet['state_id']?>" id="state<?=$fet['state_id']?>"><?=$fet['state_name']?></label>
        </div>
    </div>
    <?php
    endwhile;
    $i++;
    endwhile;
    if($inc == 0)
    echo '<div class="search-sf"><br><br><center>Record not found!</center></div>';
endif;

if($_REQUEST['branch_id']):
    $branch_id = $_REQUEST['branch_id'];
    $sel = mysql_query("SELECT federation_id, federation_name FROM federations WHERE branch_id='$branch_id' AND status='1'", $link_client_database);
    echo "<option value=' '>Select federation name </option>";
    while($fet = mysql_fetch_array($sel)):
    echo "<option value='".$fet[federation_id]."'>".$fet[federation_name]."</option>";
    endwhile;
endif;

if($_REQUEST['federation_all']):
    $sel = mysql_query("SELECT federation_id, federation_name FROM federations WHERE status='1'", $link_client_database);
    echo "<option value=''>Select federation name </option>";
    while($fet = mysql_fetch_array($sel)):
    echo "<option value='".$fet[federation_id]."'>".$fet[federation_name]."</option>";
    endwhile;
endif;

if($_REQUEST['affliation_for']):
    $affliation_for = $_REQUEST['affliation_for'];
    if($affliation_for == "1"):
    $sel = mysql_query("SELECT branch_id, branch_name FROM branches WHERE status='1'", $link_client_database);
    $name = "Branch";
    elseif($affliation_for == "2"):
        $sel = mysql_query("SELECT federation_id, federation_name FROM federations WHERE status='1'", $link_client_database);
    $name = "Federation";
    else:
        $sel = mysql_query("SELECT cluster_id, cluster_name from clusters WHERE status='1'", $link_client_database);
    $name = "Cluster";
    endif;
    
    echo $name."##";
    
    while($fet = mysql_fetch_array($sel)):
    ?>
    <div class="row">
    <div class="checkbox-inline state-lists" >
        <input type="checkbox" name="aff_for[]" class="aff_for_case" value="<?=$fet[0]?>" id="state<?=$fet[0]?>"><?=$fet[1]?>
    </div>
    </div>
    <?php
    endwhile;
endif;

/*if($_REQUEST['affliation_with']):
    $affliation_with = $_REQUEST['affliation_with'];
    if($affliation_with == "1"):
    $sel  = mysql_query("SELECT bank_id, bank_name FROM banks WHERE status='1'", $link_ekgaon_global);
    $name = "Bank";
    elseif($affliation_with == "2"):
    $sel  = mysql_query("SELECT insurance_company_id, insurance_company_name FROM insurance_companies WHERE status='1'", $link_ekgaon_global);
    $name = "Financial institutions";
    elseif($affliation_with == "3"):
    $sel  = mysql_query("SELECT government_project_id, government_project_name FROM government_project WHERE status='1'", $link_ekgaon_global);
    $name = "Government project";
    endif; 
    
    echo $name."##";
    
    while($fet = mysql_fetch_array($sel)):
    ?>
    <div class="row">
        <div class="checkbox-inline state-lists" >
        <input type="checkbox" name="aff_with[]" class="aff_with_case" value="<?=$fet[0]?>" id="state<?=$fet[0]?>"><?=$fet[1]?>
        </div>
    </div>
    <?php
    endwhile;
endif;*/

if (isset($_POST['mobile_number'])):
    header('Content-type: application/json');
    $valid    = false;
    $message  = "";
    $communication_query = "";
    $mobile_numbers = $_POST['mobile_number'];
    
    /*$comm_id = $_POST['branch_id'];
    if(!empty($comm_id)):
    $sel_comm = "SELECT communication_id FROM communication_information WHERE communication_for = '2' and communication_reference_id = '$comm_id'";
    $query_comm = mysql_query($sel_comm,$link_client_database) or die($valid   = false);
    $row_comm = mysql_fetch_array($query_comm);
    if (!empty($row_comm['communication_id'])):
        $com_id = $row_comm['communication_id'];
        $communication_query = "and communication_id != '$com_id'";
    endif;
    endif;
    
    $comm_id = $_POST['contact_person_id'];
    if(!empty($comm_id)):
    $sel_comm = "SELECT communication_id FROM communication_information WHERE communication_for = '9' and communication_reference_id = '$comm_id'";
    $query_comm = mysql_query($sel_comm,$link_client_database) or die($valid   = false);
    $row_comm = mysql_fetch_array($query_comm);
    if (!empty($row_comm['communication_id'])):
        $com_id = $row_comm['communication_id'];
        $communication_query = "and communication_id != '$com_id'";
    endif;
    endif;*/
    
    if(count($mobile_numbers) > 0):
    foreach ($mobile_numbers as $mobile_number)
    {
        //$sel = "SELECT mobile_number FROM mobile WHERE mobile_number = '$mobile_number' $communication_query";
        $sel = "SELECT mobile_number FROM global_users WHERE mobile_number = '$mobile_number'";
        $query = mysql_query($sel,$link_microfinance_global) or die($valid   = false);
        $row = mysql_fetch_array($query);
        if (!empty($row['mobile_number'])):
        $valid   = false;
        $message = "Mobile number already used";
        else:
        $valid   = true;
        $message = "";
        endif;   
    }
    endif;
    
    echo json_encode(array( 'valid' => $valid, 'message' => $message ));
endif;

if (isset($_POST['email'])):
    header('Content-type: application/json');
    $valid    = false;
    $message  = "";
    $communication_query = "";
    $email_addresses = $_POST['email'];
    
    /*$comm_id = $_POST['branch_id'];
    if(!empty($comm_id)):
    $sel_comm = "SELECT communication_id FROM communication_information WHERE communication_for = '2' and communication_reference_id = '$comm_id'";
    $query_comm = mysql_query($sel_comm,$link_client_database) or die($valid   = false);
    $row_comm = mysql_fetch_array($query_comm);
    if (!empty($row_comm['communication_id'])):
        $com_id = $row_comm['communication_id'];
        $communication_query = "and communication_id != '$com_id'";
    endif;
    endif;
    
    $comm_id = $_POST['contact_person_id'];
    if(!empty($comm_id)):
    $sel_comm = "SELECT communication_id FROM communication_information WHERE communication_for = '9' and communication_reference_id = '$comm_id'";
    $query_comm = mysql_query($sel_comm,$link_client_database) or die($valid   = false);
    $row_comm = mysql_fetch_array($query_comm);
    if (!empty($row_comm['communication_id'])):
        $com_id = $row_comm['communication_id'];
        $communication_query = "and communication_id != '$com_id'";
    endif;
    endif;*/
    
    if(count($email_addresses) > 0):
    foreach ($email_addresses as $email_address)
    {
        //$sel = "SELECT email_address FROM email WHERE email_address = '$email_address' $communication_query";
        $sel = "SELECT email_id FROM global_users WHERE email_id = '$email_address'";
        $query = mysql_query($sel,$link_microfinance_global) or die($valid   = false);
        $row = mysql_fetch_array($query);
        if (!empty($row['email_id'])):
        $valid   = false;
        $message = "Email address already used";
        else:
        $valid   = true;
        $message = "";
        endif;
    }
    endif;
    echo json_encode(array( 'valid' => $valid, 'message' => $message ));
endif;



//Field Officer EMAIL AND MOBILE NO VALIDATION.
if (isset($_POST['fo_mobile_number'])):
    header('Content-type: application/json');
    $valid    = false;
    $message  = "";
    $mobile_numbers=$_POST['fo_mobile_number'];
    if(count($mobile_numbers) > 0):
    foreach ($mobile_numbers as $mobile_number)
    {
        $sel = "SELECT mobile_number FROM field_agents WHERE mobile_number = '$mobile_number'";
        $query = mysql_query($sel,$link_microfinance_global) or die($valid   = false);
        $row = mysql_fetch_array($query);
        if (!empty($row['mobile_number'])):
        $valid   = false;
        $message = "Mobile number already used";
        else:
        $valid   = true;
        $message = "";
        endif;
    }
    endif;
    echo json_encode(array( 'valid' => $valid, 'message' => $message ));
endif;



if (isset($_POST['fo_email'])):
    header('Content-type: application/json');
    $valid    = false;
    $message  = ""; 
    $email_ids = $_POST['fo_email'];

    if(count($email_ids) > 0):
    foreach ($email_ids as $email_id )
    {
        $sel = "SELECT email_id FROM field_agents WHERE email_id = '$email_id'";
        $query = mysql_query($sel,$link_microfinance_global) or die($valid   = false);
        $row = mysql_fetch_array($query);
        if (!empty($row['email_id'])):
        $valid   = false;
        $message = "Email ID already used";
        else:
        $valid   = true;
        $message = "";
        endif;
    }
    endif;
    
    echo json_encode(array( 'valid' => $valid, 'message' => $message ));
endif;


if(isset($_FILES["profile_photo"]["type"]))
{
    $validextensions = array("jpeg", "jpg", "png", "gif");
    $temporary = explode(".", $_FILES["profile_photo"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["profile_photo"]["type"] == "image/png") || ($_FILES["profile_photo"]["type"] == "image/jpg") || ($_FILES["profile_photo"]["type"] == "image/jpeg")
    ) && ($_FILES["profile_photo"]["size"] < 1000000) //Approx. 1000kb files can be uploaded.
    && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["profile_photo"]["error"] . "<br/><br/>";
        } else {
            if (file_exists("upload/" . $_FILES["profile_photo"]["name"])) {
                echo $_FILES["profile_photo"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
            } else {
                $file_tmp_name  = $_FILES["profile_photo"]['tmp_name'];
        $file_name  = $_FILES["profile_photo"]['name'];
        $file_type  = $_FILES["profile_photo"]['type'];
        $ran = $user_id.'_'.time();
        $file_uload = array(
            'image_file'    => '@'. $file_tmp_name .';filename=' . $file_name .';type='. $file_type .';',
            'width_one'     => '300',
            'width_two'     => '100',
            'width_three'   => '50',
            'path_one'      => $client_database_name. '/users/large/',
            'path_two'      => $client_database_name. '/users/medium/',
            'path_three'    => $client_database_name. '/users/small/',
            'ran'       => $ran);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file_uload);
        curl_setopt($ch, CURLOPT_URL, $branch_office_demo_upload_url . '/image_file_uploads.php'); 
        curl_exec($ch);
        curl_close($ch);
        
        $profile_photo = $ran.'.png';
        
        $login_user_photo = $branch_office_demo_upload_url.'/'.$client_database_name.'/users/medium/'.$profile_photo;
        if (@getimagesize($login_user_photo)) {
            mysql_query("update global_users SET photo = '$profile_photo' WHERE global_user_id = '$user_id'",$link_microfinance_global);
            $login_user_photo = $login_user_photo;
        } else {
            echo "##";
            $login_user_photo = $branch_office_demo_application_url."/themes/images/no_profile_male.png";
        }
        echo '<img class="img-circle" id="profile_image" width="100" src="'.$login_user_photo.'" alt="User Pic">';
            }
        }
    }
}

if (isset($_POST['old_password'])):
    header('Content-type: application/json');
    $valid    = false;
    $message  = "";
    $communication_query = "";
    if($_POST['old_password'] != "")
    {
    $old_password = md5($_POST['old_password']);
    $sel = "SELECT password FROM global_users WHERE password = '$old_password' and global_user_id = '$user_id'";
    $query = mysql_query($sel,$link_microfinance_global) or die($valid   = false);
    $row = mysql_fetch_array($query);
    if (!empty($row['password'])):
        $valid   = true;
        $message = "";
    else:
        $valid   = false;
        $message = "Sorry Old Password Error";
    endif;
    }
    echo json_encode(array( 'valid' => $valid, 'message' => $message ));
endif;
/*-------------MESSAGE DELETED------*/
if ($_REQUEST['val1'] && $_REQUEST['table'] && $_REQUEST['fld1'] && $_REQUEST['fld2']):
    $val1  = $_REQUEST['val1'];
    $val2  = $_REQUEST['val2'];
    $table = $_REQUEST['table'];
    $fld1  = $_REQUEST['fld1'];
    $fld2  = $_REQUEST['fld2'];
    $up    = "update $table set $fld2 = '$val2' where $fld1 = '$val1'";
    if (mysql_query($up, $link_client_database)):
        echo "1";
    else:
        echo "0";
    endif;
endif;
/*-------MESSAGE DELETED-----------*/
?>
<script>
function getresult(scriptUrl)
{
    var result = null;
    $.ajax({
    url: scriptUrl,
    type: 'post',
    dataType: 'html',
    async: false,
    success: function(data)
    {
        result = $.trim(data);
    }
    });
    return result;
}

function get_state_list(country_class)
{
    var country_ids = new Array();
    $("."+country_class+":checked").each(function( key,val ){ country_ids.push($(this).val()); });
    if($.trim(country_ids) != "")
    {
    $('#state_div').html("");
    $('#loading').show();
    var result_url = "../ajax.php?country_ids="+country_ids;
    $('#state_div').html(getresult(result_url));
    $('#loading').hide();
    $('#record_state_found').html("No State Selected");
    }
}


function federation_list(branch_id,federation_id)
{
    if($.trim(branch_id) != "")
    $('#'+federation_id).html(getresult("../ajax.php?branch_id="+branch_id));
    //else
    //$('#'+federation_id).html(getresult("../ajax.php?federation_all=1"));
}

function affliation(affliation_for,affliation_with)
{
    if($.trim(affliation_for) !=""  &&  $.trim(affliation_with) !="") {
    $('#display_affliation').css("display","block");
    res_for = getresult("../ajax.php?affliation_for="+affliation_for).split('##');
    $('#affliation_for_title').html(res_for[0]);
    if($('#affliation_for_display').html(res_for[1]))
    {
        res_with = getresult("../ajax.php?affliation_with="+affliation_with).split('##');
        $('#affliation_with_title').html(res_with[0]);
        $('#affliation_with_display').html(res_with[1]);
    }
    } else {
        $('#display_affliation').css("display","none");
    }
}


function pro_ser_alert(id)
{
    if($("#prov_services"+id+":checked").length == 1)
    {
    //alert(id);
    //$("#prov_services"+id+":checked").prop('checked', false);
    //$("#prov_services"+id+":checked").removeAttr("checked");
    }
}

function numbercheck(evt)
{
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    if(key == 37 || key == 38 || key == 39 || key == 40 || key == 8 || key == 46) { // Left / Up / Right / Down Arrow, Backspace, Delete keys
    return;
    }
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key)) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

function confirm_form(obj)
{
    $con = $(obj).attr("title");
    if( confirm($con) == true ) {
    $con = $(obj).attr("type","submit");
    return true;
    } else {
    $con = $(obj).attr("type","button");
    return false;
    }
}

$(function() {
    $(".alert-remove").delay(5000).fadeOut("slow");
});

function addmore(addmore_classname,addmore_increment_classname,addmore_click_classname,group_title)
{
    var addmore = $( "."+addmore_classname+":first" ).clone(); // Get first class object
    $( "."+addmore_classname+":last" ).after(addmore.find("input").val("").end()); // Get the last class object and Put the first class html value
    $( '.'+addmore_increment_classname).each(function( index ){ $(this).html(group_title +' '+ (index+1) ); }); // Increment value to put the class name related tag html value
    $( '.'+addmore_classname+' input').each(function( index ) { // all the class each input tag looping
        inp = $(this).attr('id').replace(/[0-9]/g,"");
        $(this).attr('id', inp + (index + 1));
    });
    
    var inds = 0;
    $( '.'+addmore_classname).each(function( index )
    {
        index = index + 1;
        inds++;
        $(this).attr('id', addmore_classname + index); // add ID attribute and put the value for the class object
        var id = "#"+addmore_classname + index;
        $( id+' input, '+id+' select, '+id+' textarea, '+id+' label' ).each(function( ind )
        {
            if($(this).attr("id"))
            {
                $inele = $(this);
                inp = $inele.attr('id').replace(/[0-9]/g,"");
                $(this).attr('id', inp + (index)); // input new id append
                
                if($(this).hasClass("datepicker")) {
                    $(this).removeClass('datepicker hasDatepicker');
                    $(this).addClass('datepicker');
                    $(this).datepicker({
                        dateFormat: 'dd-mm-yy',
                        changeMonth: true,
                        changeYear: true,
                        yearRange: "-100:+0"
                    });
                }
                
                if($inele.attr('onchange'))
                {
                    sel = $inele.attr('onchange').replace(/[0-9]/g,"");
                    var pos = sel.indexOf("'");
                    if(pos !== -1)
                    {
                        var sell = sel.substring(pos).replace(/["')]/g,"").split(",");
                        var ad = new Array();
                        $.each(sell,function( sid ) {  ad.push("'"+sell[sid]+index+"'"); });
                        var newfun = sel.substring(0,pos)+ad+")";
                        $inele.attr('onchange',newfun); // select new onchange append
                    }
                }
            }
            
            if ($(this).attr('type') == 'checkbox')
            {
                sel =$inele.attr('name').replace(/[0-9]/g,"");
                che = sel.replace(/\[.*\]/g,'');
                sam = $(this).attr('name', che + (index) + '[]');
            }
            
        });
        
    });
    
    $( '.'+addmore_click_classname ).each(function( index ){
        if((parseInt(index)+1) !== inds)
            $(this).attr("onclick","remove_new('"+addmore_classname+"','"+addmore_increment_classname+"','"+addmore_click_classname+"','"+group_title+"','"+(index + 2)+"')").html('<i class="fa fa-times"></i> Remove');
        else
              $(this).attr("onclick","addmore('"+addmore_classname+"','"+addmore_increment_classname+"','"+addmore_click_classname+"','"+group_title+"','"+(index + 1)+"')").html('<i class="fa fa-plus"></i> Add more');
    });
    
    var form_id = $('.'+addmore_classname).closest('form').attr('id');
    loadform(form_id);
}


function remove_new(addmore_classname,addmore_increment_classname,addmore_click_classname,group_title,number)
{
    $("#"+addmore_classname+number).remove();
    $( '.'+addmore_increment_classname ).each(function( index ){ $(this).html(group_title +' '+ (index+1) ); }); // Increment value to put the class name related tag html value
    var inds = 0;
    $( '.'+addmore_classname).each(function( index )
    {
        index = index + 1;
        inds++;
        $(this).attr('id', addmore_classname+index); // add ID attribute and put the value for the class object
        var id = "#"+addmore_classname + index;
        
        $( id+' input, '+id+' select, '+id+' textarea' ).each(function( ind ) {
            $inele = $(this);
            inp = $inele.attr('id').replace(/[0-9]/g,"");
            $(this).attr('id', inp + (index)); // input new id append
            
            if($inele.attr('onchange'))
            {
                sel =$inele.attr('onchange').replace(/[0-9]/g,"");
                var pos = sel.indexOf("'");
                var sell = sel.substring(pos).replace(/["')]/g,"").split(",");
                var ad = new Array();
                $.each(sell,function( sid ) {  ad.push("'"+sell[sid]+index+"'"); });
                var newfun = sel.substring(0,pos)+ad+")";
                $inele.attr('onchange', newfun); // select new onchange append
            }
            
        });
    });
    $( '.'+addmore_click_classname ).each(function( index ){
        if((parseInt(index)+1) !== inds)
            $(this).attr("onclick","remove_new('"+addmore_classname+"','"+addmore_increment_classname+"','"+addmore_click_classname+"','"+group_title+"','"+(index + 2)+"')").html('<i class="fa fa-times"></i> Remove');
        else
            $(this).attr("onclick","addmore('"+addmore_classname+"','"+addmore_increment_classname+"','"+addmore_click_classname+"','"+group_title+"','"+(index + 1)+"')").html('<i class="fa fa-plus"></i> Add more');
    });
    remove_amount(); // is not requierd function 
}


function loadform(id)
{
    $('#'+id+' input, #'+id+' select, #'+id+' textarea').each(
        function(index){
            $inp = $(this);
            $('#'+id).bootstrapValidator('addField', $inp);
        }
    )
}

function displayid(id_name)
{
    $("#"+id_name).css("display","block");
}

function upload_file_check(input)
{
    var errors = "";
    if (!window.FileReader) {
    errors = "The file API isn't supported on this browser yet.";
    }
    if (!input) {
    errors = "Um, couldn't find the fileinput element.";
    } else if (!input.files) {
    errors = "This browser doesn't seem to support the `files` property of file inputs.";
    } else if (!input.files[0]) {
    errors = "Please select a file before clicking 'Load'";
    } else {
    var extension = $(input).val().substr($(input).val().lastIndexOf('.') + 1).toLowerCase();
    var allowedExtensions = ['jpg', 'png', 'jpeg'];
    if (allowedExtensions.indexOf(extension) === -1) {
        errors = "Invalid file Format. Only " + allowedExtensions.join(', ') + " are allowed.";
    } else {
        var file = input.files[0];
        if(file.size > 1000000) { // 1000000 => 1 mb
        errors = "File exceeds maximum allowed size of 1MB";
        }
    }
    }
    return errors;
}
/*MFI Validation Basic Information*/
$(document).ready(function(){
    
    $('#change_password').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            old_password: {
                validators: {
                    notEmpty: {
                        message: 'The Old Password is required and cannot be empty'
                    },
            remote: {
            url: 'ajax.php'
            }
                }
            },
        new_password: {
                validators: {
                    notEmpty: {
                        message: 'The New Password is required and cannot be empty'
                    },
            callback: {
            callback: function(value, validator, $field) {
                if (value === '') {
                return true;
                }
                // Check the password strength
                if (value.length < 5) {
                return {
                    valid: false,
                    message: 'The password must be more than 8 characters long'
                };
                }
                // The password doesn't contain any uppercase character
                if (value === value.toLowerCase()) {
                return {
                    valid: false,
                    message: 'The password must contain at least one upper case character'
                }
                }
                // The password doesn't contain any uppercase character
                if (value === value.toUpperCase()) {
                return {
                    valid: false,
                    message: 'The password must contain at least one lower case character'
                }
                }
                // The password doesn't contain any digit
                if (value.search(/[0-9]/) < 0) {
                return {
                    valid: false,
                    message: 'The password must contain at least one digit'
                }
                }
                return true;
            }
            },
            different: {
                        field: 'old_password',
                        message: 'The old password and new password cannot be the same as each other'
                    }
                }
            },
        confirm_password: {
                validators: {
                    notEmpty: {
                        message: 'The Confirm Password is required and cannot be empty'
                    },
            identical: {
            field: 'new_password',
            message: 'The password and its confirm are not the same'
            }
                }
            }
        }
    });
    
    //client contact information validation
    $('#contact_information').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            phone_number: {
                validators: {
            digits: {
            message: 'This is not phone number'
            },
                    stringLength: {
            min: 6,
            max: 11,
                        message: 'The phone number invalid'
                    }
                }
            },
            emergency_contact_number: {
                validators: {
                    /*notEmpty: {
                        message: 'The mobile number is required and cannot be empty'
                    },*/
            digits: {
            message: 'This is not Emergency Contact Number'
            },
            stringLength: {
                        max: 15,
            min: 10,
                        message: 'The Emergency Contact Number invalid'
                    }
                }
            },
            contact_address_one: {
                validators: {
                    notEmpty: {
                        message: 'The Contact Address one is required and cannot be empty'
                    }
                }
            }
        }
    });
    
    
    
});


</script>


