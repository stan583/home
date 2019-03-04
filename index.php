<!-- //==========================================================
//Author:  SAC Stan Russell
//Date:  JUN 2017
//Purpose:  ...
//Email:  stanrussell@aidu.mod.uk
//=========================================================== -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>ERS Data Input Tool</title>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="robots" content="no index, no follow" />
    <link rel="stylesheet" href="./jquery-ui-1.11.4/jquery-ui.css">
    <script src="./jquery-ui-1.10.4/development-bundle/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="./js/projectJS.js"></script>
    <script src="./jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="./jquery-ui-1.11.4/jquery-blockUi.js"></script>
    <link rel="shortcut icon" href="./images/favicon.ico"/>
    <link href="./css/projectCSS.css" rel="stylesheet" type="text/css" />
    <title>index</title>
  </head>
<?php
require_once "./config/utilities.php";
$x = 0;
$checkedBox = "checked='checked'";

//=========================Returns effective date of current DAFIF UK====================================

$currentDate = sql("select cycle_date from version_current");
$currentDate = fetchArray($currentDate);
$currentDate = $currentDate[0];
$currentDay = substr($currentDate, 0, 2);
$currentMonth = substr($currentDate, 2, 2);
$currentYear = substr($currentDate, 4);
$currentDate = $currentDay." ".month($currentMonth)." ".$currentYear;

//======================Comma Seperates each IAM on data input to SAD_db ================================
//===============Also validates data on input, by replacing commas with full stops=======================

$iam=$_POST['iam'];
if (isset($iam)) {
      $iam = str_replace(", ", ". ", $iam);
}
$iamAdd1=$_POST['iamAdd1'];
if (isset($iamAdd1)) {
    $iamAdd1 = str_replace(", ", ". ", $iamAdd1);
    $iamAdd1=",".$iamAdd1;
    if ($iamAdd1 == ",") {
        $iamAdd1 = "";
    }
}
$iamAdd2=$_POST['iamAdd2'];
if (isset($iamAdd2)) {
    $iamAdd2 = str_replace(", ", ". ", $iamAdd2);
    $iamAdd2=",".$iamAdd2;
    if ($iamAdd2 == ",") {
        $iamAdd2 = "";
    }
}
$iamAdd3=$_POST['iamAdd3'];
if (isset($iamAdd3)) {
    $iamAdd3 = str_replace(", ", ". ", $iamAdd3);
    $iamAdd3=",".$iamAdd3;
    if ($iamAdd3 == ",") {
        $iamAdd3 = "";
    }
}
$iamAdd4=$_POST['iamAdd4'];
if (isset($iamAdd4)) {
    $iamAdd4 = str_replace(", ", ". ", $iamAdd4);
    $iamAdd4=",".$iamAdd4;
    if ($iamAdd4 == ",") {
        $iamAdd4 = "";
    }
}
$iamAdd5=$_POST['iamAdd5'];
if (isset($iamAdd5)) {
    $iamAdd5 = str_replace(", ", ". ", $iamAdd5);
    $iamAdd5=",".$iamAdd5;
    if ($iamAdd5 == ",") {
        $iamAdd5 = "";
    }
}
$iamAdd6=$_POST['iamAdd6'];
if (isset($iamAdd6)) {
    $iamAdd6 = str_replace(", ", ". ", $iamAdd6);
    $iamAdd6=",".$iamAdd6;
    if ($iamAdd6 == ",") {
        $iamAdd6 = "";
    }
}
$iamAdd7=$_POST['iamAdd7'];
if (isset($iamAdd7)) {
    $iamAdd7 = str_replace(", ", ". ", $iamAdd7);
    $iamAdd7=",".$iamAdd7;
    if ($iamAdd7 == ",") {
        $iamAdd7 = "";
    }
}
$iamAdd8=$_POST['iamAdd8'];
if (isset($iamAdd8)) {
    $iamAdd8 = str_replace(", ", ". ", $iamAdd8);
    $iamAdd8=",".$iamAdd8;
    if ($iamAdd8 == ",") {
        $iamAdd8 = "";
    }
}
$iamAdd9=$_POST['iamAdd9'];
if (isset($iamAdd9)) {
    $iamAdd9 = str_replace(", ", ". ", $iamAdd9);
    $iamAdd9=",".$iamAdd9;
    if ($iamAdd9 == ",") {
        $iamAdd9 = "";
    }
}
$iamAdd10=$_POST['iamAdd10'];
if (isset($iamAdd10)) {
    $iamAdd10 = str_replace(", ", ". ", $iamAdd10);
    $iamAdd10=",".$iamAdd10;
    if ($iamAdd10 == ",") {
        $iamAdd10 = "";
    }
}
$iamAdd11=$_POST['iamAdd11'];
if (isset($iamAdd11)) {
    $iamAdd11 = str_replace(", ", ". ", $iamAdd11);
    $iamAdd11=",".$iamAdd11;
    if ($iamAdd11 == ",") {
        $iamAdd11 = "";
    }
}
$iamAdd12=$_POST['iamAdd12'];
if (isset($iamAdd12)) {
    $iamAdd12 = str_replace(", ", ". ", $iamAdd12);
    $iamAdd12=",".$iamAdd12;
    if ($iamAdd12 == ",") {
        $iamAdd12 = "";
    }
}
$iamAdd13=$_POST['iamAdd13'];
if (isset($iamAdd13)) {
    $iamAdd13 = str_replace(", ", ". ", $iamAdd13);
    $iamAdd13=",".$iamAdd13;
    if ($iamAdd13 == ",") {
        $iamAdd13 = "";
    }
}
$iamAdd14=$_POST['iamAdd14'];
if (isset($iamAdd14)) {
    $iamAdd14 = str_replace(", ", ". ", $iamAdd14);
    $iamAdd14=",".$iamAdd14;
    if ($iamAdd14 == ",") {
        $iamAdd14 = "";
    }
}
$iamAdd15=$_POST['iamAdd15'];
if (isset($iamAdd15)) {
    $iamAdd15 = str_replace(", ", ". ", $iamAdd15);
    $iamAdd15=",".$iamAdd15;
    if ($iamAdd15 == ",") {
        $iamAdd15 = "";
    }
}
$iamAdd16=$_POST['iamAdd16'];
if (isset($iamAdd16)) {
    $iamAdd16 = str_replace(", ", ". ", $iamAdd16);
    $iamAdd16=",".$iamAdd16;
    if ($iamAdd16 == ",") {
        $iamAdd16 = "";
    }
}
$iamAdd17=$_POST['iamAdd17'];
if (isset($iamAdd17)) {
    $iamAdd17 = str_replace(", ", ". ", $iamAdd17);
    $iamAdd17=",".$iamAdd17;
    if ($iamAdd17 == ",") {
        $iamAdd17 = "";
    }
}
$iamAdd18=$_POST['iamAdd18'];
if (isset($iamAdd18)) {
    $iamAdd18 = str_replace(", ", ". ", $iamAdd18);
    $iamAdd18=",".$iamAdd18;
    if ($iamAdd18 == ",") {
        $iamAdd18 = "";
    }
}
$iamAdd19=$_POST['iamAdd19'];
if (isset($iamAdd19)) {
    $iamAdd19 = str_replace(", ", ". ", $iamAdd19);
    $iamAdd19=",".$iamAdd19;
    if ($iamAdd19 == ",") {
        $iamAdd19 = "";
    }
}
$iamAdd20=$_POST['iamAdd20'];
if (isset($iamAdd20)) {
    $iamAdd20 = str_replace(", ", ". ", $iamAdd20);
    $iamAdd20=",".$iamAdd20;
    if ($iamAdd20 == ",") {
        $iamAdd20 = "";
    }
}

//==============================================================================================

$arptId=$_POST['aprt_ident'];
$name=$_POST['name'];
$icao=$_POST['icao'];
$country=$_POST['country'];
$telephone=$_POST['telephone'];
$opr_hrs_rmks=$_POST['opr_hrs_rmks'];
$seasonal_avail_rmks=$_POST['seasonal_avail_rmks'];
$rwy_char_rmks=$_POST['rwy_char_rmks'];
$hls_la_rmks=$_POST['hls_la_rmks'];
$ats_air_rmks=$_POST['ats_air_rmks'];
$ats_com_rmks=$_POST['ats_com_rmks'];
$radio_nav_rmks=$_POST['radio_nav_rmks'];
$local_traf_warn_rmks=$_POST['local_traf_warn_rmks'];
$local_traf_rwy_rmks=$_POST['local_traf_rwy_rmks'];
$add_info_rmks=$_POST['add_info_rmks'];
$archived=$_POST['archived'];
$dateOfChange=$_POST['date_of_change'];
$idhidden=$_POST['hiddenId'];
$returnAD = $_POST['returnAD'];
$searchId = $_GET['searchId'];
if (isset($searchId)) {
    $returnAD = $searchId;
}

//===========================SAD_db search========================================================

if (isset($_POST['submit']) or isset($_POST['searchHidden'])) {
    if (isset($_POST['submit'])) {
        $search=$_POST['search'];
    } else if (isset($_POST['searchHidden'])) {
        $search = $_POST['searchHidden'];
    }
    $result = sql("select * from ERS_table where name like '$search%' order by name");
    while ($line=mysqli_fetch_array($result)) {
        $nameSearch=$line['name'];
        $icaoSearch=$line['icao'];
        $identSearch=$line['arpt_ident'];
        $button= "<input type='submit'  method='post' name='returnAD' id='$idSearch' value='$nameSearch ($identSearch)' onclick='nameSearch()' style='color:#002f5f; resize: both; overflow: auto; max-width: 85%; min-width: 85%;'>";
      //------------display the result of the search---------------------------------------------
        $message .= $button;
    }
    $message .= "<input type='hidden' method='post' name='searchHidden' id='$search' value='$search'>";
    if ($button == "") {
        $message ="Your search - <b>$search</b> - did not match any records";
    }
}

if (isset($returnAD)) {
    $a = strstr($returnAD, "(");
    $b = ltrim($a, "(");
    $c = rtrim($b, ")");
    $queryEdit=sql("select * from ERS_table where arpt_ident='$c'");
    $fetchEdit=fetch($queryEdit);
    $idFetch=$fetchEdit['arpt_ident'];
    $arptId=$fetchEdit['arpt_ident'];
    $name=$fetchEdit['name'];
    $icao=$fetchEdit['icao'];
    $telephone=$fetchEdit['telephone'];
    $iam=$fetchEdit['iam'];
    $iamExplode=explode(",", $iam);
    $iam0=$iamExplode[0];
    $flips=$fetchEdit['flips'];
    $icf=$fetchEdit['icf'];
    $vdf=$fetchEdit['vdf'];
    $opr_hrs_rmks=$fetchEdit['opr_hrs_rmks'];
    $seasonal_avail_rmks=$fetchEdit['seasonal_avail_rmks'];
    $rwy_char_rmks=$fetchEdit['rwy_char_rmks'];
    $hls_la_rmks=$fetchEdit['hls_la_rmks'];
    $ats_air_rmks=$fetchEdit['ats_air_rmks'];
    $ats_com_rmks=$fetchEdit['ats_com_rmks'];
    $radio_nav_rmks=$fetchEdit['radio_nav_rmks'];
    $local_traf_warn_rmks=$fetchEdit['local_traf_warn_rmks'];
    $local_traf_rwy_rmks=$fetchEdit['local_traf_rwy_rmks'];
    $add_info_rmks=$fetchEdit['add_info_rmks'];
    $archived=$fetchEdit['archived'];
    $dateOfChange=$fetchEdit['date_of_change'];
    $country_name = "select distinct country_name from appc_ERS where country like substr('$arptId',1,2)";
    $country = sql($country_name);
    $lines = fetchArray($country);
    $ctry = $lines['country_name'];
    //---------Allows Cote d'Ivoire to be read--------------------------------------------------
    $ctry1 = str_replace("'", "&#39; ", $ctry);
    //---------Removes all references to Islas Malvinas from FI---------------------------------
    $ctry2 = str_replace("(Islas Malvinas)", "", $ctry1);
    //------------------------------------------------------------------------------------------
}

//====================Submit to SAD_db==========================================================

if ($_POST['adUpdate']=="SUBMIT") {
    if ($idhidden=="") {
        $message .= "Please select an AD";
    } else {
        if (isset($telephone)) {
            $telRep = preg_replace("/\r|\n|\t/", " ", $telephone);
            $telRep = preg_replace('!\s+!', ' ', $telRep);
            sql("update ERS_table set telephone='$telRep' where arpt_ident='$idhidden'");
        }
        sql("update ERS_table set name='$name', icao='$icao', country='$country',
             iam='$iam"."$iamAdd1"."$iamAdd2"."$iamAdd3"."$iamAdd4"."$iamAdd5"."$iamAdd6"."$iamAdd7"."$iamAdd8"."$iamAdd9"."$iamAdd10"."$iamAdd11"."$iamAdd12"
             ."$iamAdd13"."$iamAdd14"."$iamAdd15"."$iamAdd16"."$iamAdd17"."$iamAdd18"."$iamAdd19"."$iamAdd20' where arpt_ident='$idhidden';
         ");
        $ctry2 = $country;
        $idFetch = $idhidden;
        if (isset($_POST['chart'])) {
            $flipsPost = $_POST['chart'];
            $flipsImplode = implode(",", $flipsPost);
            $N = count($flipsPost);
            for ($i=0; $i < $N; $i++) {
                $var1=$flipsPost[$i];
                sql("update ERS_table set flips='$flipsImplode' where arpt_ident='$idhidden'");
            }
        } else {
            sql("update ERS_table set flips='' where arpt_ident='$idhidden'");
        }
        if (isset($_POST['freq'])) {
            $freqPost = $_POST['freq'];
            $freqImplode = implode(",", $freqPost);
            $N = count($freqPost);
            for ($i=0; $i < $N; $i++) {
                $var1=$freqPost[$i];
                sql("update ERS_table set icf='$freqImplode' where arpt_ident='$idhidden'");
            }
        } else {
            sql("update ERS_table set icf='' where arpt_ident='$idhidden'");
        }
        if (isset($_POST['vdf'])) {
            $vdfPost = $_POST['vdf'];
            $vdfImplode = implode(",", $vdfPost);
            $N = count($vdfPost);
            for ($i=0; $i < $N; $i++) {
                $var1=$vdfPost[$i];
                sql("update ERS_table set vdf='$vdfImplode' where arpt_ident='$idhidden'");
            }
        } else {
            sql("update ERS_table set vdf='' where arpt_ident='$idhidden'");
        }
        if (isset($opr_hrs_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $opr_hrs_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set opr_hrs_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($seasonal_avail_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $seasonal_avail_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set seasonal_avail_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($rwy_char_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $rwy_char_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            // $RmkRep2 = preg_replace("", "", $RmkRep);
            sql("update ERS_table set rwy_char_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($hls_la_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $hls_la_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set hls_la_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($ats_air_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $ats_air_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set ats_air_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($ats_com_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $ats_com_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set ats_com_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($radio_nav_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $radio_nav_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set radio_nav_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($local_traf_warn_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $local_traf_warn_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set local_traf_warn_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($local_traf_rwy_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $local_traf_rwy_rmks);
            $RmkRep = preg_replace('!\s+!', ' ', $RmkRep);
            sql("update ERS_table set local_traf_rwy_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        if (isset($add_info_rmks)) {
            $RmkRep = preg_replace("/\r|\n|\t/", " ", $add_info_rmks);
            sql("update ERS_table set add_info_rmks='$RmkRep' where arpt_ident='$idhidden'");
        }
        $message .= "</br>".$name." Updated Succesfully";
    }
}

//==============================================================================================

?>
    <body id = "searchId">
      <div id="topBanner">
        <div style="margin:0px auto 1% auto; position:relative;">
          <div style="margin: 0px auto 0px auto; width:1024px; height:71px;">
            <img src="./images/AIDU_crest_colour-1.png" style="width:75px; float:left; margin:0px 0px 0px 70px; height:90px; position:absolute;" alt="AIDU Logo" />
            <div  style="width:753px; float:left; position:absolute; margin:0px 5px 0px 140px; top:0px; text-align:center; font-weight:bold; line-height:50px; font-size:30px;" >
              <span style="color:#739ABC">En Route Supplement</span><span style="color:#002f5f"></br>Data Input Tool</span>
            </div>
            <img src="./images/JFC_70.jpg" style="width:60px; float:right; height:70px; margin:10px 68px 0px 0px; top:8px;" alt="JFC Logo" />
          </div>
        </div>
      </div>
      <button class="button5" type="button" onclick="self.location='./manage.php'" style="margin-left: 2%;">Manage AD</button>
      <hr style="position:relative; margin-top: 2%;" />
        <div id = upload5>
          <div id = uploadHeader2>
            <p><button style="color:#002f5f;" onclick="window.location.href='upload.php'">Upload latest DAFIF UK</button></p>
          </div>
          <div id = uploadFile2>
            <p style="text-align: center;">Current Date:</br><b><?php echo $currentDate;?></b></p>
          </div>
          </div>
        <div class="logoText">
          <form action="index.php" method="post" id="searchform"  name="searchform" onsubmit="return required()" >
            <?php if ($searchId != "" OR $returnAD != "") { ?>
            <div id="formBox" style="color:#002f5f; background-color: #ccdae5; box-shadow: 0 0 1px 2px #DDD; border: 1px solid #BBB; height: 70%; width: 80%; margin-left: 2%; margin-top: -4%; padding-left: 1%; padding-top: 1%;  overflow: auto; position: absolute;">
              <input type="hidden" name="hiddenId" id="hiddenId" value="<?php echo $idFetch ?>">
              <a class="formTag">Name</a>
              <input type="text" name="name" id="name" maxlength="100" value="<?php echo $name?>" style="margin-bottom: 2%;">
              <a class="formTag">ICAO</a>
              <input type="text" name="icao" id="icao" maxlength="100" value="<?php echo $icao?>" style="margin-bottom: 2%;">
              <a class="formTag">Country</a>
              <input type="text" name="country" id="country" maxlength="100" value="<?php echo $ctry2?>" style="margin-bottom: 2%;">
              <a class="formTag">Date</a>
              <input type="text" name="arptId" id="date" maxlength="100" value="<?php echo $dateOfChange?>" style="margin-bottom: 2%;">
              </br>
              <a class="formTag" style="float:left;">FLIPs</a>
              <div id='chartSelect' style='height: auto; margin-left: 7.5%;'>
                            <input type='checkbox' name='chart[]' id='flips' value='TC' <?php if (strpos($flips, 'TC') !== false) echo "checked='checked'"; ?>>TC<br>
                            <input type='checkbox' name='chart[]' id='flips' value='HLS' <?php if (strpos($flips, 'HLS') !== false) echo "checked='checked'"; ?>>HLS<br>
                            <input type='checkbox' name='chart[]' id='flips' value='MA' <?php if (strpos($flips, 'MA') !== false) echo "checked='checked'"; ?>>MA<br>
              </div>
              </br>
              </br>
              <div id='chartSelect' style='overflow:auto; float:left;'>
                            <input type='checkbox' name='chart[]' id='flips' value='AF(H/L)~1' <?php if (strpos($flips, 'AF(H/L)~1') !== false) echo "checked='checked'"; ?>>AF(H/L)1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AF(H/L)~2' <?php if (strpos($flips, 'AF(H/L)~2') !== false) echo "checked='checked'"; ?>>AF(H/L)2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AF(H/L)~3' <?php if (strpos($flips, 'AF(H/L)~3') !== false) echo "checked='checked'"; ?>>AF(H/L)3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AF(H/L)~4' <?php if (strpos($flips, 'AF(H/L)~4') !== false) echo "checked='checked'"; ?>>AF(H/L)4<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AF(H/L)~5' <?php if (strpos($flips, 'AF(H/L)~5') !== false) echo "checked='checked'"; ?>>AF(H/L)5<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AF(H/L)~6' <?php if (strpos($flips, 'AF(H/L)~6') !== false) echo "checked='checked'"; ?>>AF(H/L)6<br>
              </div>
              <div id='chartSelect' style='overflow:auto; float:left;'>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H/L)~3' <?php if (strpos($flips, 'AS(H/L)~3') !== false) echo "checked='checked'"; ?>>AS(H/L)3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H/L)~5' <?php if (strpos($flips, 'AS(H/L)~5') !== false) echo "checked='checked'"; ?>>AS(H/L)5<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H/L)~6' <?php if (strpos($flips, 'AS(H/L)~6') !== false) echo "checked='checked'"; ?>>AS(H/L)6<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H/L)~7' <?php if (strpos($flips, 'AS(H/L)~7') !== false) echo "checked='checked'"; ?>>AS(H/L)7<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H/L)~9' <?php if (strpos($flips, 'AS(H/L)~9') !== false) echo "checked='checked'"; ?>>AS(H/L)9<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H/L)~SP3' <?php if (strpos($flips, 'AS(H/L)~SP3') !== false) echo "checked='checked'"; ?>>AS(H/L)SP3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AS(H)~SP1' <?php if (strpos($flips, 'AS(H)~SP1') !== false) echo "checked='checked'"; ?>>AS(H)SP1<br>
              </div>
              <div id='chartSelect' style='overflow:auto; float:left;'>
                            <input type='checkbox' name='chart[]' id='flips' value='AT(H)~1' <?php if (strpos($flips, 'AT(H)~1') !== false) echo "checked='checked'"; ?>>AT(H)1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AT(H)~2' <?php if (strpos($flips, 'AT(H)~2') !== false) echo "checked='checked'"; ?>>AT(H)2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AT(H)~3' <?php if (strpos($flips, 'AT(H)~3') !== false) echo "checked='checked'"; ?>>AT(H)3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AT(H)~4' <?php if (strpos($flips, 'AT(H)~4') !== false) echo "checked='checked'"; ?>>AT(H)4<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AT(H)~ST1' <?php if (strpos($flips, 'AT(H)~ST1') !== false) echo "checked='checked'"; ?>>AT(H)ST1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='AT(H)~ST2' <?php if (strpos($flips, 'AT(H)~ST2') !== false) echo "checked='checked'"; ?>>AT(H)ST2<br>
              </div>
              <div id='chartSelect' style='overflow:auto; float:left;'>
                            <input type='checkbox' name='chart[]' id='flips' value='ME(H/L)~1' <?php if (strpos($flips, 'ME(H/L)~1') !== false) echo "checked='checked'"; ?>>ME(H/L)1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='ME(H/L)~2' <?php if (strpos($flips, 'ME(H/L)~2') !== false) echo "checked='checked'"; ?>>ME(H/L)2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='ME(H/L)~3' <?php if (strpos($flips, 'ME(H/L)~3') !== false) echo "checked='checked'"; ?>>ME(H/L)3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='ME(H/L)~SP1' <?php if (strpos($flips, 'ME(H/L)~SP1') !== false) echo "checked='checked'"; ?>>ME(H/L)SP1<br>
              </div>
              <div id='chartSelect' style='overflow:auto; float:left;'>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~6' <?php if (strpos($flips, 'EU(H)~6') !== false) echo "checked='checked'"; ?>>EU(H)6<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~7' <?php if (strpos($flips, 'EU(H)~7') !== false) echo "checked='checked'"; ?>>EU(H)7<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~8' <?php if (strpos($flips, 'EU(H)~8') !== false) echo "checked='checked'"; ?>>EU(H)8<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~9' <?php if (strpos($flips, 'EU(H)~9') !== false) echo "checked='checked'"; ?>>EU(H)9<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~10' <?php if (strpos($flips, 'EU(H)~10') !== false) echo "checked='checked'"; ?>>EU(H)10<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~11' <?php if (strpos($flips, 'EU(H)~11') !== false) echo "checked='checked'"; ?>>EU(H)11<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~12' <?php if (strpos($flips, 'EU(H)~12') !== false) echo "checked='checked'"; ?>>EU(H)12<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~13' <?php if (strpos($flips, 'EU(H)~13') !== false) echo "checked='checked'"; ?>>EU(H)13<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~14' <?php if (strpos($flips, 'EU(H)~14') !== false) echo "checked='checked'"; ?>>EU(H)14<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~15' <?php if (strpos($flips, 'EU(H)~15') !== false) echo "checked='checked'"; ?>>EU(H)15<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~16' <?php if (strpos($flips, 'EU(H)~16') !== false) echo "checked='checked'"; ?>>EU(H)16<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~18' <?php if (strpos($flips, 'EU(H)~18') !== false) echo "checked='checked'"; ?>>EU(H)18<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~SP1' <?php if (strpos($flips, 'EU(H)~SP1 ') !== false) echo "checked='checked'"; ?>>EU(H)SP1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~SP1-OAT' <?php if (strpos($flips, 'EU(H)~SP1-OAT') !== false) echo "checked='checked'"; ?>>EU(H)SP1-OAT<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(H)~SP2' <?php if (strpos($flips, 'EU(H)~SP2') !== false) echo "checked='checked'"; ?>>EU(H)SP2<br>
              </div>
              <div id='chartSelect' style='overflow:auto; float:left;'>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~2' <?php if (strpos($flips, 'EU(L)~2') !== false) echo "checked='checked'"; ?>>EU(L)2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~3' <?php if (strpos($flips, 'EU(L)~3') !== false) echo "checked='checked'"; ?>>EU(L)3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~4' <?php if (strpos($flips, 'EU(L)~4') !== false) echo "checked='checked'"; ?>>EU(L)4<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~5' <?php if (strpos($flips, 'EU(L)~5') !== false) echo "checked='checked'"; ?>>EU(L)5<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~6' <?php if (strpos($flips, 'EU(L)~6') !== false) echo "checked='checked'"; ?>>EU(L)6<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~7' <?php if (strpos($flips, 'EU(L)~7') !== false) echo "checked='checked'"; ?>>EU(L)7<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~8' <?php if (strpos($flips, 'EU(L)~8') !== false) echo "checked='checked'"; ?>>EU(L)8<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~9' <?php if (strpos($flips, 'EU(L)~9') !== false) echo "checked='checked'"; ?>>EU(L)9<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~10' <?php if (strpos($flips, 'EU(L)~10') !== false) echo "checked='checked'"; ?>>EU(L)10<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~11' <?php if (strpos($flips, 'EU(L)~11') !== false) echo "checked='checked'"; ?>>EU(L)11<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~14' <?php if (strpos($flips, 'EU(L)~14') !== false) echo "checked='checked'"; ?>>EU(L)14<br>
                            <input type='checkbox' name='chart[]' id='flips' value='EU(L)~15' <?php if (strpos($flips, 'EU(L)~15') !== false) echo "checked='checked'"; ?>>EU(L)15<br>
              </div>
              <div id='chartSelect' style='overflow:auto;'>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(H)~2' <?php if (strpos($flips, 'UK(H)~2') !== false) echo "checked='checked'"; ?>>UK(H)2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(H)~6' <?php if (strpos($flips, 'UK(H)~6') !== false) echo "checked='checked'"; ?>>UK(H)6<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(H/L)~SP2' <?php if (strpos($flips, 'UK(H/L)~SP2') !== false) echo "checked='checked'"; ?>>UK(H/L)SP2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~1' <?php if (strpos($flips, 'UK(L)~1') !== false) echo "checked='checked'"; ?>>UK(L)1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~2' <?php if (strpos($flips, 'UK(L)~2') !== false) echo "checked='checked'"; ?>>UK(L)2<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~3' <?php if (strpos($flips, 'UK(L)~3') !== false) echo "checked='checked'"; ?>>UK(L)3<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~4' <?php if (strpos($flips, 'UK(L)~4') !== false) echo "checked='checked'"; ?>>UK(L)4<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~5' <?php if (strpos($flips, 'UK(L)~5 ') !== false) echo "checked='checked'"; ?>>UK(L)5<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~5-OIL' <?php if (strpos($flips, 'UK(L)~5-OIL') !== false) echo "checked='checked'"; ?>>UK(L)5-OIL<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~SP1' <?php if (strpos($flips, 'UK(L)~SP1') !== false) echo "checked='checked'"; ?>>UK(L)SP1<br>
                            <input type='checkbox' name='chart[]' id='flips' value='UK(L)~SP3' <?php if (strpos($flips, 'UK(L)~SP3') !== false) echo "checked='checked'"; ?>>UK(L)SP3<br>
              </div>
              <p class="formTagText">Telephone</p>
              <textarea rows="2" cols="500" maxlength="1000" name="telephone" id="telephone" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $telephone?></textarea>
              <p class="formTagText">IAM</p>
                <?php
                if (isset($returnAD)) {
                    $queryEdit=sql("select * from ERS_table where arpt_ident='$c'");
                    $fetchEdit=fetch($queryEdit);
                    $idFetch=$fetchEdit['arpt_ident'];
                    $arptId=$fetchEdit['arpt_ident'];

                //==========================RESULT IAM==============================================================================================

                    $resultIam = sql("select arpt_ident, trm_ident, app_type, cat_a_dh, cat_a_rv, cat_a_ha, cat_a_wx_cl, cat_a_wx_pv, cat_b_dh, cat_b_rv, cat_b_ha, cat_b_wx_cl, cat_b_wx_pv,
                                      cat_c_dh, cat_c_rv, cat_c_ha, cat_c_wx_cl, cat_c_wx_pv, cat_d_dh, cat_d_rv, cat_d_ha, cat_d_wx_cl, cat_d_wx_pv, cycle_date
                                     from trm_min_current
                                     where arpt_ident = '$idFetch'
                                     AND app_type not like 'CIRC%'
                                     AND app_type not like 'TOTAL%'
                                     AND (trm_ident like '%ILS%' OR trm_ident like '%LOC%');
                    ");

              //==========================RESULT IAM==============================================================================================

                    while ($line = fetchArray($resultIam)) {
                        $arpt_ident = $line['arpt_ident'];
                        $trmIdent = $line['trm_ident'];
                        $appType = $line['app_type'];
                        $fTrmIdent = explode(" ", $trmIdent);
                        $fTrmIdent = array_map('trim', $fTrmIdent);
                        $fTrmIdent = array_filter($fTrmIdent);
                        $fTrmIdent = implode("@", $fTrmIdent);
                        $fTrmIdent = explode("@", $fTrmIdent);
                        $fTrmRwy = $fTrmIdent[0];
                        $fTrmRwy = substr($fTrmRwy, 1, 3);
                        if ((substr($fTrmRwy, -1) == "R") OR (substr($fTrmRwy, -1) == "L") OR (substr($fTrmRwy, -1) == "C")) {
                            $fTrmRwy = substr($fTrmRwy, 0, 3);
                        } else {
                            $fTrmRwy = substr($fTrmRwy, 0, 2);
                        }
                        if (!($line['cat_d_ha'] == 0) AND !($line['cat_d_dh'] == 0)) {
                              $descH = $line['cat_d_dh'];
                              $descOCA = $line['cat_d_ha'];
                              $cat = "";
                        } else if (!($line['cat_c_ha'] == 0) AND !($line['cat_c_dh'] == 0)) {
                              $descH = $line['cat_c_dh'];
                              $descOCA = $line['cat_c_ha'];
                              $cat = "(CAT C)";
                        } else if (!($line['cat_b_ha'] == 0) AND !($line['cat_b_dh'] == 0)) {
                              $descH = $line['cat_b_dh'];
                              $descOCA = $line['cat_b_ha'];
                              $cat = "(CAT B)";
                        } else {
                            $descH = $line['cat_a_dh'];
                            $descOCA = $line['cat_a_ha'];
                            $cat = "(CAT A)";
                        }
                        if ($fTrmIdent[1] != "LOC/DME") {
                            if ($descOCA < 200) {
                                $descHOCA = "TOO LOW";
                                $descDiff = 200 - $descOCA;
                                $descHD = $descH + $descDiff;
                                $descHR = ceil($descHD / 10) * 10;
                                $descOCAR = 200;
                                $descHOCA = $descHR."(".$descOCAR.")";
                            } else {
                                $descHR = ceil($descH / 10) * 10;
                                $descOCAR = ceil($descOCA / 10) * 10;
                                $descHOCA = $descHR."(".$descOCAR.")";
                            }
                        } else {
                            $descHR = $descH;
                            $descOCAR = $descOCA;
                            $descHOCA = $descHR."(".$descOCAR.")";
                        }
                        $nameIcao = adInfo($arpt_ident);
                        $arptName = $nameIcao[0];
                        $arptIcao = $nameIcao[1];
                        $country_name = "select distinct country_name from appc_cc_icao where country like substr('$arpt_ident',1,2)";
                        $country = sql($country_name);
                        $lines = fetchArray($country);
                        $ctry = $lines['country_name'];
                        $resultIamFormat = $fTrmIdent[1]." ".$fTrmRwy."/".$descHOCA.$cat."^";
                        $resultIamExplode = (explode('^', $resultIamFormat, 0));
                        foreach ($resultIamExplode as $key) {
                            $key = rtrim($resultIamFormat, "^");
                            echo "<textarea disabled='disabled' rows='1' cols='500' maxlength='1000' name='iam' id='iam' value='' style='max-width:90%; color: black; background-color: lightgrey;'>$key</textarea>";
                        }
                    }
                }
                ?>
              <div id="iamText">
                  <textarea rows="1" cols="500" maxlength="2000" name="iam" id="iam" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $iam0?></textarea>
                    <?php
                    if (isset($returnAD)) {
                        $queryEdit=sql("select iam from ERS_table where arpt_ident = '$c'");
                        $fetchEdit=fetch($queryEdit);
                        $idFetch=$fetchEdit['arpt_ident'];
                        $arptId=$fetchEdit['arpt_ident'];
                        $name=$fetchEdit['name'];
                        $icao=$fetchEdit['icao'];
                        $iam=$fetchEdit['iam'];
                        $iamExplode=explode(",", $iam);
                        $iam0=$iamExplode[0];
                        $iam1=$iamExplode[1];
                        if (isset($iam1)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd1' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam1</textarea>";
                        }
                        $iam2=$iamExplode[2];
                        if (isset($iam2)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd2' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam2</textarea>";
                        }
                        $iam3=$iamExplode[3];
                        if (isset($iam3)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd3' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam3</textarea>";
                        }
                        $iam4=$iamExplode[4];
                        if (isset($iam4)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd4' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam4</textarea>";
                        }
                        $iam5=$iamExplode[5];
                        if (isset($iam5)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd5' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam5</textarea>";
                        }
                        $iam6=$iamExplode[6];
                        if (isset($iam6)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd6' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam6</textarea>";
                        }
                        $iam7=$iamExplode[7];
                        if (isset($iam7)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd7' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam7</textarea>";
                        }
                        $iam8=$iamExplode[8];
                        if (isset($iam8)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd8' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam8</textarea>";
                        }
                        $iam9=$iamExplode[9];
                        if (isset($iam9)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd9' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam9</textarea>";
                        }
                        $iam10=$iamExplode[10];
                        if (isset($iam10)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd10' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam10</textarea>";
                        }
                        $iam11=$iamExplode[11];
                        if (isset($iam11)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd11' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam11</textarea>";
                        }
                        $iam12=$iamExplode[12];
                        if (isset($iam12)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd12' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam12</textarea>";
                        }
                        $iam13=$iamExplode[13];
                        if (isset($iam13)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd13' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam13</textarea>";
                        }
                        $iam14=$iamExplode[14];
                        if (isset($iam14)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd14' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam14</textarea>";
                        }
                        $iam15=$iamExplode[15];
                        if (isset($iam15)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd15' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam15</textarea>";
                        }
                        $iam16=$iamExplode[16];
                        if (isset($iam16)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd16' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam16</textarea>";
                        }
                        $iam17=$iamExplode[17];
                        if (isset($iam17)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd17' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam17</textarea>";
                        }
                        $iam18=$iamExplode[18];
                        if (isset($iam18)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd18' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam18</textarea>";
                        }
                        $iam19=$iamExplode[19];
                        if (isset($iam19)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd19' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam19</textarea>";
                        }
                        $iam20=$iamExplode[20];
                        if (isset($iam20)) {
                            echo "<textarea rows='1' cols='500' maxlength='2000' name='iamAdd20' id='iamAdd' value='' style='max-width:90%;' onkeypress='if(event.keyCode==13){return false;}'>$iam20</textarea>";
                        }
                    }
                    ?>

                  <button id="addRow" type="button" onclick="addIam()" style="color: #002f5f;">Add row</button>
              </div>
                <?php
                if (isset($returnAD)) {
                    echo "<p class='formTagText'>ICF/VDF</p>";
                    $queryEdit=sql("select * from ERS_table where arpt_ident='$c'");
                    $fetchEdit=fetch($queryEdit);
                    $idFetch=$fetchEdit['arpt_ident'];
                    $arptId=$fetchEdit['arpt_ident'];
                //==================RESULT COM======================================================================================================

                    $resultCom = sql("select t1.* from (
                                      SELECT arpt_ident, comm_type, comm_name, freq_1, freq_2, freq_3, freq_4, freq_5
                                      FROM acom_current
                                      UNION
                                      SELECT arpt_ident, comm_type, comm_name, freq_1, freq_2, freq_3, freq_4, freq_5
                                      FROM acom_add_current) t1
                                      WHERE t1.arpt_ident = '$idFetch'
                                      order by arpt_ident;
                    ");

                //===================RESULT COM======================================================================================================

                    while ($line=fetchArray($resultCom)) {
                        $arpt_ident = $line['arpt_ident'];
                        $nameIcao = adInfo($arpt_ident);
                        $arptName = $nameIcao[0];
                        $arptIcao = $nameIcao[1];
                        $country_name = "select distinct country_name from appc_cc_icao where country like substr('$arpt_ident',1,2)";
                        $country = sql($country_name);
                        $lines = fetchArray($country);
                        $ctry = $lines['country_name'];
                        $comm_type = $line['comm_type'];
                        $comm_name = $line['comm_name'];
                        $freqIcf1 = $line['freq_1'];
                        $freq1 = formatComm($freqIcf1);
                        $freq1 = floatingDecimal($freqIcf1);
                        $freq1 = rtrim($freq1, "M");
                        $freqIcf2 = $line['freq_2'];
                        $freq2 = formatComm($freqIcf2);
                        $freq2 = floatingDecimal($freqIcf2);
                        $freq2 = rtrim($freq2, "M");
                        $freqIcf3 = $line['freq_3'];
                        $freq3 = formatComm($freqIcf3);
                        $freq3 = floatingDecimal($freqIcf3);
                        $freq3 = rtrim($freq3, "M");
                        $freqIcf4 = $line['freq_4'];
                        $freq4 = formatComm($freqIcf4);
                        $freq4 = floatingDecimal($freqIcf4);
                        $freq4 = rtrim($freq4, "M");
                        $freqIcf5 = $line['freq_5'];
                        $freq5 = formatComm($freqIcf5);
                        $freq5 = floatingDecimal($freqIcf5);
                        $freq5 = rtrim($freq5, "M");
                        $resultComFormat = $comm_name."^";
                        $resultComExplode = (explode('^', $resultComFormat, 0));
                        $pos1a = "";
                        foreach ($resultComExplode as $key) {
                            $key = rtrim($resultComFormat, "^");
                            $icfFull1 = $comm_name."/".$freqIcf1;
                            $icfFull2 = $comm_name."/".$freqIcf2;
                            $icfFull3 = $comm_name."/".$freqIcf3;
                            $icfFull4 = $comm_name."/".$freqIcf4;
                            $icfFull5 = $comm_name."/".$freqIcf5;
                            $pos1 = strpos($icf, $icfFull1);
                            $pos1a = strcmp($icf, $icfFull1);
                            $pos2 = strpos($icf, $icfFull2);
                            $pos3 = strpos($icf, $icfFull3);
                            $pos4 = strpos($icf, $icfFull4);
                            $pos5 = strpos($icf, $icfFull5);
                            $pos6 = strpos($vdf, $icfFull1);
                            $pos6a = strcmp($vdf, $icfFull1);
                            $pos7 = strpos($vdf, $icfFull2);
                            $pos8 = strpos($vdf, $icfFull3);
                            $pos9 = strpos($vdf, $icfFull4);
                            $pos10 = strpos($vdf, $icfFull5);
                            echo "<div style='background-color: white; border: 2px solid #739ABC; padding: 4px 10px 0 10px; max-width: 90%; margin-bottom: 1%; display: flex'><div style='background-color:white; padding: 0 10px 0 10px; position: absolute;'>$key</div><br>";
                            if ($pos1 === FALSE AND $pos6 === FALSE) {
                                echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf1'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf1'><p>$freq1</p></div><br>";
                            } elseif ($pos1 !== FALSE AND $pos6 === FALSE) {
                                echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf1'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf1'><p>$freq1</p></div><br>";
                            } elseif ($pos1 === FALSE AND $pos6 !== FALSE) {
                                echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf1'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf1'><p>$freq1</p></div><br>";
                            } else {
                                echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf1'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf1'><p>$freq1</p></div><br>";
                            }
                            if ($freq2 != "") {
                                if ($pos2 === FALSE AND $pos7 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf2'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf2'><p>$freq2</p></div><br>";
                                } elseif ($pos2 !== FALSE AND $pos7 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf2'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf2'><p>$freq2</p></div><br>";
                                } elseif ($pos2 === FALSE AND $pos7 !== FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf2'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf2'><p>$freq2</p></div><br>";
                                } else {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf2'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf2'><p>$freq2</p></div><br>";
                                }
                            }
                            if ($freq3 != "") {
                                if ($pos3 === FALSE AND $pos8 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf3'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf3'><p>$freq3</p></div><br>";
                                } elseif ($pos3 !== FALSE AND $pos8 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf3'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf3'><p>$freq3</p></div><br>";
                                } elseif ($pos3 === FALSE AND $pos8 !== FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf3'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf3'><p>$freq3</p></div><br>";
                                } else {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf3'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf3'><p>$freq3</p></div><br>";
                                }
                            }
                            if ($freq4 != "") {
                                if ($pos4 === FALSE AND $pos9 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf4'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf4'><p>$freq4</p></div><br>";
                                } elseif ($pos4 !== FALSE AND $pos9 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf4'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf4'><p>$freq4</p></div><br>";
                                } elseif ($pos4 === FALSE AND $pos9 !== FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf4'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf4'><p>$freq4</p></div><br>";
                                } else {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf4'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf4'><p>$freq4</p></div><br>";
                                }
                            }
                            if ($freq5 != "") {
                                if ($pos5 === FALSE AND $pos10 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf5'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf5'><p>$freq5</p></div><br>";
                                } elseif ($pos5 !== FALSE AND $pos10 === FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf5'>VDF<input type='checkbox' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf5'><p>$freq5</p></div><br>";
                                } elseif ($pos5 === FALSE AND $pos10 !== FALSE) {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' name='freq[]' id='freq1' value='$comm_name/$freqIcf5'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf5'><p>$freq5</p></div><br>";
                                } else {
                                    echo "<div class='icfVdfBox'>ICF<input style='border: 1px;' type='checkbox' checked='checked' name='freq[]' id='freq1' value='$comm_name/$freqIcf5'>VDF<input type='checkbox' checked='checked' name='vdf[]' id='vdf1' value='$comm_name/$freqIcf5'><p>$freq5</p></div><br>";
                                }
                            }
                            echo "</div>";
                        }
                    }
                }
              //=================================================================================================================================
            ?>
              <p class="formTagText" style="border-radius: 15px">Remarks</p>
              <p class="formTagText">AD 2.3 Operational Hours</p>
              <textarea rows="8" cols="500" maxlength="6000" name="opr_hrs_rmks" id="opr_hrs_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $opr_hrs_rmks?></textarea>
              <p class="formTagText">AD 2.7 Seasonal Availability</p>
              <textarea rows="8" cols="500" maxlength="6000" name="seasonal_avail_rmks" id="seasonal_avail_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $seasonal_avail_rmks?></textarea>
              <p class="formTagText">AD 2.12 Runway Physical Characteristics</p>
              <textarea rows="8" cols="500" maxlength="6000" name="rwy_char_rmks" id="rwy_char_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $rwy_char_rmks?></textarea>
              <p class="formTagText">AD 2.16 Helicopter Landing Area</p>
              <textarea rows="8" cols="500" maxlength="6000" name="hls_la_rmks" id="hls_la_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $hls_la_rmks?></textarea>
              <p class="formTagText">AD 2.17 ATS Airspace</p>
              <textarea rows="8" cols="500" maxlength="6000" name="ats_air_rmks" id="ats_air_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $ats_air_rmks?></textarea>
              <p class="formTagText">AD 2.18 ATS Communication Facilities</p>
              <textarea rows="8" cols="500" maxlength="6000" name="ats_com_rmks" id="ats_com_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $ats_com_rmks?></textarea>
              <p class="formTagText">AD 2.19 Radio Navigation and Landing Aids</p>
              <textarea rows="8" cols="500" maxlength="6000" name="radio_nav_rmks" id="radio_nav_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $radio_nav_rmks?></textarea>
              <p class="formTagText">AD 2.20 Local Traffic - Warnings</p>
              <textarea rows="8" cols="500" maxlength="6000" name="local_traf_warn_rmks" id="local_traf_warn_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $local_traf_warn_rmks?></textarea>
              <p class="formTagText">AD 2.20 Local Traffic - Use of Runways</p>
              <textarea rows="8" cols="500" maxlength="6000" name="local_traf_rwy_rmks" id="local_traf_rwy_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $local_traf_rwy_rmks?></textarea>
              <p class="formTagText">AD 2.23 Additional Information</p>
              <textarea rows="8" cols="500" maxlength="6000" name="add_info_rmks" id="add_info_rmks" value="" style="max-width:90%;" onkeypress="if(event.keyCode==13){return false;}"><?php echo $add_info_rmks?></textarea>
            </div>
            <?php } elseif ($x != 1) {?>
              <div id="formBox" style="color:#002f5f; background-color: #ccdae5; box-shadow: 0 0 1px 2px #DDD; border: 1px solid #BBB; height: 70%; width: 80%; margin-left: 2%; margin-top: -4%; padding-left: 1%; padding-top: 1%;  overflow: auto; position: absolute;">
                <img id=AIDUlogo src="./images/AIDU_crest_colour-1.png" alt="AIDU Symbol" style="top: 2%; left: 39%; width: 20%; max-height: 40%; height: auto; position: relative;">
                <h1 style="text-align: center;"><b>En Route Supplement Data Input Tool</b></h1>
                <p>Current DAFIF UK Effective Date:</p>
                <h1 style="text-align: center;"><b><?php echo $currentDate;?></b></h1>
                <ul style="text-align: center;">
                  <li>Ensure the latest version of DAFIF UK has been uploaded.</li>
                  <li>Select an Aerodrome to add supplementary data to.</li>
                  <li>Submit the data to the SAD database.</li>
                  <li>Create an ERS using DAFIF and SAD data.</li>
                </ul>
              </div>
            <?php }?>
            <div id="response" style="overflow:auto;">
              <p class="searchTitle"><?php echo "Search Results</br><hr></br>"."<p>".$message."</p>";?></p>
            </div>
            <div id="navigate" style="float: left; position: absolute; width: 83%; margin-top:-8%;">
              <select name="heliId" id="heliId" style="color:#002f5f; margin-left: 2%;" onchange="searchId()">
                <option value="Select AD">
                  Select AD
                </option>
                    <?php
                    $queryEdit=sql("select arpt_ident, name, icao from ERS_table
                                    where (substr(ERS_table.icao,1,2) in
                                    ('tx', 'bg', 'bi', 'eg', 'ei', 'gc', 'la', 'da', 'lo', 'lq', 'ld', 'lc', 'he', 'lf', 'lg', 'll', 'li', 'oj', 'bk',
                                    'ol', 'hl', 'lw', 'lm', 'gm', 'lp', 'ly', 'lj', 'le', 'ls', 'os', 'dt', 'lt', 'lx', 'um', 'eb', 'el', 'lb', 'lk',
                                    'ek', 'ee', 'ef', 'ed', 'et', 'lh', 'ev', 'ey', 'lu', 'eh', 'en', 'ep', 'lr', 'ur', 'ul', 'uu', 'uw', 'lz', 'es',
                                    'uk', 'oa', 'sa', 'ud', 'fh', 'df', 'fk', 'fe', 'di', 'fo', 'gg', 'fg', 'ga', 'gq', 'ft', 'ub', 'ob', 'db', 'fb',
                                    'hb', 'vd', 'gv', 'sc', 'fc', 'fz', 'hd', 'hh', 'ha', 'sf', 'gb', 'ug', 'dg', 'vh', 'wi', 'va', 've', 'vi', 'vo',
                                    'oi', 'or', 'ua', 'hk', 'ok', 'vl', 'fx', 'vm', 'fw', 'wb', 'vr', 'fi', 'fq', 'vy', 'fy', 'vn', 'dr', 'dn', 'oo',
                                    'op', 'rp', 'fm', 'hr', 'fp', 'oe', 'go', 'fs', 'ws', 'hc', 'fa', 'vc', 'hs', 'fd', 'ut', 'ht', 'vt', 'hu', 'om',
                                    'su', 'ut', 'vv', 'oy', 'fl', 'fv'))
                                    order by name");
                    while ($fetchEdit=fetch($queryEdit)) {
                        $name=$fetchEdit['name'];
                        $id=$fetchEdit['arpt_ident'];
                        $icao=$fetchEdit['icao'];
                        if ($searchId == $name or $c == $id) {
                            $selected = "selected";
                        }
                        print "<option $selected value='$name ($id)' style='color:#002f5f;'>".$name."</option>";
                        $selected = "";
                    }
                    ?>
              </select>
              <input  id ="searchReturn" type="text" name="search" style="color:#002f5f;">
              <input  id="searchBox" type="submit" name="submit" value="Search" style="color:#002f5f; height: 28px; margin-right: 0.69%;">
              <button class="button1" type="button" onclick="createSupp('BINA')"> <span>Create BINA</span> </button>
              <button class="button2" type="button" onclick="createSupp('NOREU')"> <span>Create NOREU</span> </button>
              <button class="button3" type="button" onclick="createSupp('EUMED')"> <span>Create EUMED</span> </button>
              <button class="button4" type="button" onclick="createSupp('SAAAFE')"> <span>Create SAAAFE</span> </button>
              <input type="submit" name="adUpdate" id="adUpdate" value="SUBMIT" style="color:#002f5f; float:right; font-weight: bold;"></b>
            </div>
          </form>
        </div>
      </br>
      </div>
      <div id="footer">
        <div style="width:950px; position:fixed; bottom:10px; left:50%; margin-left:-500px;">
          <a style="text-decoration:none;" onclick="window.open(this.href,_blank);return false;" href="https://www.gov.uk/government/publications/crown-copyright-mod-news-licence">
            <span style="float: left; color:#002F5F;font-size: 10px;">©Crown copyright 2019</span>
            <a style="text-decoration:none;" onclick="window.open(this.href,_blank);return false;" href="./version/version1.2ReleaseNotes.txt">
              <span style="float:right; color:#002F5F;font-size: 10px;">Ver 1.2</span>
          </div>
      </div>
    </body>
</html>
