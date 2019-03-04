<?php
//==========================================================
//Author:  SAC Stan Russell
//Date:  JUN 2017
//Purpose:  ...
//Email:  stanrussell@aidu.mod.uk
//==========================================================
require "./config/utilities.php";

$arptId=$_POST['aprt_ident'];
$name=$_POST['name'];
$icao=$_POST['icao'];
$country=$_POST['country'];
$telephone=$_POST['telephone'];
$iam=$_POST['iam'];
$remarks=$_POST['remarks'];
$annotations=$_POST['annotations'];
$archived=$_POST['archived'];
$dateOfChange=$_POST['date_of_change'];
$idhidden=$_POST['hiddenId'];
$searchHls = $_POST['searchHls'];
$searchId = $_GET['searchId'];

if (isset($searchId)) {
    $searchHls = $searchId;
}

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
        $button= "<input type='submit'  method='post' name='searchHls' id='$idSearch' value='$nameSearch' onclick='hello()' style='color:#002f5f; max-width: 85%; min-width: 85%;'>";
      //----------------------------------------display the result of the array------------------------------------------------------------------------------------------------ //
        $message .= $button;
      // ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- //
    }
    $message .= "<input type='hidden' method='post' name='searchHidden' id='$search' value='$search'>";
    if ($button == "") {
        $message ="Your search - <b>$search</b> - did not match any records";
    }
}
if (isset($searchHls)) {
    $queryEdit=sql("select * from ERS_table where name='$searchHls'");
    $fetchEdit=fetch($queryEdit);
    $idFetch=$fetchEdit['arpt_ident'];
    $arptId=$fetchEdit['arpt_ident'];
    $name=$fetchEdit['name'];
    $icao=$fetchEdit['icao'];
    // $country=$fetchEdit['country'];
    $telephone=$fetchEdit['telephone'];
    $iam=$fetchEdit['iam'];
    $remarks=$fetchEdit['remarks'];
    $annotations=$fetchEdit['annotations'];
    $archived=$fetchEdit['archived'];
    $dateOfChange=$fetchEdit['date_of_change'];

    $country_name = "select distinct country_name from appc_cc_icao where country like substr('$arptId',1,2)";
    $country = sql($country_name);
    $lines = fetchArray($country);
    $ctry = $lines['country_name'];
    //=========Allows Cote d'Ivoire to be read============
    $ctry1 = str_replace("'", "&#39; ", $ctry);
    //=========Removes all references to Islas Malvinas from FI============
    $ctry2 = str_replace("(Islas Malvinas)", "", $ctry1);
    //====================================================

    // unset($aUKselect);
    // unset($aHOSPselect);
    // unset($aEURselect);
    // unset($aFIselect);
    // if ($type=="hls_uk") {
    //     $aUKselect = "selected";
    // }
    // if ($type=="hls_hosp") {
    //     $aHOSPselect = "selected";
    // }
    // if ($type=="hls_eur") {
    //     $aEURselect = "selected";
    // }
    // if ($type=="hls_fi") {
    //     $aFIselect = "selected";
    // }
}

// if ($_POST['addAd']=="Submit") {
//   // -----------------------------------Data Validation: Check if there is already an entry with the same name----------------------------------------------------------------- //
//     $adInsert=sql("select name from ERS_table where name = '$name'");
//     $conflictName=fetch($adInsert);
//     $queryName=$conflictName['name'];
//   // -----------------------------------Data Validation: Check if there is already an entry with the same name in the archive-------------------------------------------------- //
//     $adInsertOld=sql("select name_old from ERS_archive where name_old = '$name'");
//     $conflictNameOld=fetch($adInsertOld);
//     $queryNameOld=$conflictNameOld['name_old'];
//     if ($queryName) {
//         $message .= "$name Already Exists, Please select from the drop down to edit.";
//     } else if ($queryNameOld) {
//         $message .= "$name Already Exists in ERS Archive, Please select from Archive and reinstate to edit.";
//     } else if ($name == "") {
//          $message .= "Please Insert a Name";
//     } else if ($icao == "") {
//          $message .= "Please Insert an ICAO";
//     } else {
//         sql("update ERS_table set name='$name', icao='$icao', country='$country', telephone='$telephone', iam='$iam', remarks='$remarks', annotations='$annotations', date_of_change='$dateOfChange' where arpt_ident='$idhidden';");
//         $message .= $name." Succesfully updated";
//     }
// }
if ($_POST['adUpdate']=="Submit") {
    if ($idhidden=="") {
        $message .= "please select an AD";
    } else {
        sql("update ERS_table set name='$name', icao='$icao', country='$country', telephone='$telephone', iam='$iam', remarks='$remarks', annotations='$annotations' where arpt_ident='$idhidden';");
        $message .= $name." Updated Succesfully";
        $ctry2 = $country;
        $idFetch = $idhidden;
    }
}
// if ($_POST['deleteAd']=="Delete AD") {
//     if ($idhidden=="") {
//         $message .= "please select an AD";
//     } else {
//         sql("insert into ERS_archive values('$arptId', '$name', '$icao', '$ctry2', '$location', '$telephone', '$iam', '$remarks', '$annotations')");
//         sql("delete from ERS_table where id='$arptId'");
//         $message .= "AD Deleted";
//         header("location:index.php");
//     }
// }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>ERS Data Input Tool</title>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="robots" content="no index, no follow" />
    <script type="text/javascript" src="./js/projectJS.js"></script>
    <link rel="shortcut icon" href="./images/favicon.ico"/>
    <link href="./css/projectCSS.css" rel="stylesheet" type="text/css" />
    <title>index</title>
  </head>
    <body id = "searchId">
      <hr style="position:absolute; top:93px; width:100%;" />
      <div id="topBanner">
        <div style="margin:0px auto 40px auto background-color;">
          <div style="margin: 0px auto 0px auto; width:1024px; height:71px;">
            <img src="./images/AIDU_crest_colour-1.png" style="width:75px; float:left; margin:0px 0px 0px 70px; height:90px; position:absolute;" alt="AIDU Logo" />
            <div  style="width:753px; float:left; position:absolute; margin:0px 5px 0px 140px; top:0px; text-align:center; font-weight:bold; line-height:50px; font-size:30px;" >
              <span style="color:#739ABC">En Route Supplement</span><span style="color:#002f5f"></br>Data Input Tool</span>
            </div>
            <img src="./images/JFC_70.jpg" style="width:60px; float:right; height:70px; margin:10px 68px 0px 0px; top:8px;" alt="JFC Logo" />
          </div>
        </div>
      </div>
        <div class="logoText">
          <form action="index.php" method="post" action="search.php?go"  id="searchform"  name="searchform" onsubmit="return required()" >

            <div id="formBox" style="color:#002f5f; background-color: #ccdae5; box-shadow: 0 0 1px 2px #DDD; border: 1px solid #BBB; height: 78.25%; width: 80%; margin-left: 2%; margin-top: 4%; padding-left: 1%; padding-top: 1%;  overflow: auto; position: absolute;">
              <input type="hidden" name="hiddenId" id="hiddenId" value="<?php echo $idFetch ?>">
              <a class="formTag">Name</a>
              <input type="text" name="name" id="name" maxlength="100" value="<?php echo $name?>" style="margin-bottom: 2%;">
              <a class="formTag">ICAO</a>
              <input type="text" name="icao" id="icao" maxlength="100" value="<?php echo $icao?>" style="margin-bottom: 2%;">
              <a class="formTag">Country</a>
              <input type="text" name="country" id="country" maxlength="100" value="<?php echo $ctry2?>" style="margin-bottom: 2%;">
              <!-- <a class="formTag">Arpt Ident</a> -->
              <!-- <input type="text" name="arptId" id="arptId" maxlength="100" value="<?php //echo $idFetch?>" style="margin-bottom: 2%;"> -->
              <a class="formTag">Date</a>
              <input type="text" name="arptId" id="date" maxlength="100" value="<?php echo $dateOfChange?>" style="margin-bottom: 2%;">
              <!-- <select name="heliType" id="heliType" style="color:#002f5f;" onchange="hlsHospType()">
                <option selected="selected" value="Select HLS Type" disabled="">
                  Select Type
                </option>
                <option value="hls_uk"<?php //echo $aUKselect?>>HLS UK</option>
                <option value="hls_hosp"<?php //echo $aHOSPselect?>>HLS HOSP</option>
                <option value="hls_eur"<?php //echo $aEURselect?>>HLS EUR</option>
                <option value="hls_fi"<?php //echo $aFIselect?>>HLS FI</option>
              </select> -->
              <p class="formTagText">Telephone</p>
              <textarea rows="4" cols="500" maxlength="500" name="telephone" id="telephone" value="" style="max-width:90%;"><?php echo $telephone?></textarea>
              <p class="formTagText">IAM</p>
              <textarea rows="4" cols="500" maxlength="500" name="iam" id="iam" value="" style="max-width:90%;"><?php echo $iam?></textarea>
              <p class="formTagText">Remarks</p>
              <textarea rows="8" cols="500" maxlength="500" name="remarks" id="remarks" value="" style="max-width:90%;"><?php echo $remarks?></textarea>
              <p class="formTagText">Annotations</p>
              <textarea rows="8" cols="500" maxlength="500" name="annotations" id="annotations" value="" style="max-width:90%;"><?php echo $annotations?></textarea>
            </div>

            <div id="response" style="overflow:auto;">
              <p class="searchTitle"><?php echo "Search Results</br><hr></br>"."<p>".$message."</p>";?></p>
            </div>

            <div id="navigate" style="float: left; position: absolute; min-width: 83.75%; margin-top: 2%">
              <!-- <input type="button" name="refresh" id="refresh" value="New AD" onclick="window.location.href=window.location.href" style="margin-left: 2.3%; color:#002f5f;">
              <input type="submit" name="addAd" id="addAd" value="Submit" onclick="<?php //echo $closeGridAlert ?>" style="color:#002f5f;"> -->
              <select name="heliId" id="heliId" style="color:#002f5f; margin-left: 2.25%;" onchange="searchId()">
                <option value="Select AD">
                  Select AD
                </option>
                    <?php
                    $queryEdit=sql("select * from ERS_table
                                    where (substr(ERS_table.icao,1,2) in
                                    ('tx', 'bg', 'bi', 'eg', 'ei', 'gc', 'la', 'da', 'lo', 'lq', 'ld', 'lc', 'he', 'lf', 'lg', 'll', 'li', 'oj', 'bk',
                                    'ol', 'hl', 'lw', 'lm', 'gm', 'lp', 'ly', 'lj', 'le', 'ls', 'os', 'dt', 'lt', 'lx', 'um', 'eb', 'el', 'lb', 'lk',
                                    'ek', 'ee', 'ef', 'ed', 'et', 'lh', 'ev', 'ey', 'lu', 'eh', 'en', 'ep', 'lr', 'ur', 'ul', 'uu', 'uw', 'lz', 'es',
                                    'uk', 'oa', 'sa', 'ud', 'fh', 'df', 'fk', 'fe', 'di', 'fo', 'gg', 'fg', 'ga', 'gq', 'ft', 'ub', 'ob', 'db', 'fb',
                                    'hb', 'vd', 'gv', 'sc', 'fc', 'fz', 'hd', 'hh', 'ha', 'sf', 'gb', 'ug', 'dg', 'vh', 'wi', 'va', 've', 'vi', 'vo',
                                    'oi', 'or', 'ua', 'hk', 'ok', 'vl', 'fx', 'vm', 'fw', 'wb', 'vr', 'fi', 'fq', 'vy', 'fy', 'vn', 'dr', 'dn', 'oo',
                                    'op', 'rp', 'fm', 'hr', 'fp', 'oe', 'go', 'fs', 'ws', 'hc', 'fa', 'vc', 'hs', 'fd', 'ut', 'ht', 'vt', 'hu', 'om',
                                    'su', 'ut', 'vv', 'oy', 'fl', 'fv')) or archived = 0
                                    order by name");
                    while ($fetchEdit=fetch($queryEdit)) {
                        $name=$fetchEdit['name'];
                        $id=$fetchEdit['arpt_ident'];
                        $icao=$fetchEdit['icao'];
                        if ($label != null) {
                            if ($searchId == $name or $searchHls == $name) {
                                $selected = "selected";
                            }
                            echo "<option $selected value='$name' style='color:#002f5f;'>".$ctry2.", ".$name."</option>";
                            $selected = "";
                        } else {
                            if ($searchId == $name or $searchHls == $name) {
                                $selected = "selected";
                            }
                            echo "<option $selected value='$name' style='color:#002f5f;'>".$name."</option>";
                            $selected = "";
                        }
                    }
                    ?>
              </select>
              <input type="submit" name="adUpdate" id="adUpdate" value="Submit" style="color:#002f5f;">
              <!-- <input type="submit" name="deleteAd" id="deleteAd" value="Delete AD" onclick="return clicked();" style="color:#f90000;"> -->
              <input  id="searchBox" type="submit" name="submit" value="Search" style="float: right; color:#002f5f; height: 28px; margin-right: 0.69%;">
              <form>
                <!-- <input  type="button" name="archive" value="AD Archive" onclick="self.location='./archive.php'" style="color:#002f5f;"> -->
              </form>
              <input  type="text" name="search" style="float: right; color:#002f5f;" onkeydown="if (event.keyCode == 13) { document.getElementById('searchBox').click(); }">
              <!-- <input  type="button" name="logIn" value="Log In" onclick="window.location.href='./login.php'" style="float: right; color:#002f5f; height: 28px;"> -->
            </div>
          </form>
        </div>
      </br>
      </div>
      <div id="footer">
        <div style="width:950px; position:fixed; bottom:10px; left:50%; margin-left:-500px;">
          <a style="text-decoration:none;" onclick="window.open(this.href,_blank);return false;" href="https://www.gov.uk/government/publications/crown-copyright-mod-news-licence">
            <span style="color:#002F5F;font-size: 10px;">©Crown copyright 2017</span>
            <span style="float:right; color:#002F5F;font-size: 10px;">Ver 1.0</span>
          </div>
      </div>
    </body>
</html>
