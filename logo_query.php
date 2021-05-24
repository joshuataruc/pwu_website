<?php 

include 'db_con.php';

//shs query logo from db

$stem = "SELECT * FROM college_k12_logo WHERE course ='STEM' ORDER BY id DESC LIMIT 1";
$stem_query = mysqli_query($con, $stem) or die($con->error);
$fetch_stem = $stem_query->fetch_assoc();

$abm = "SELECT * FROM college_k12_logo WHERE course ='ABM' ORDER BY id DESC LIMIT 1";
$abm_query = mysqli_query($con, $abm);
$fetch_abm = $abm_query->fetch_assoc();

$hrs = "SELECT * FROM college_k12_logo WHERE course ='HRS' ORDER BY id DESC LIMIT 1";
$hrs_query = mysqli_query($con, $hrs);
$fetch_hrs = $hrs_query->fetch_assoc();

$culinary = "SELECT * FROM college_k12_logo WHERE course ='CULINARY' ORDER BY id DESC LIMIT 1";
$culinary_query = mysqli_query($con, $culinary);
$fetch_culinary = $culinary_query->fetch_assoc();

$trs = "SELECT * FROM college_k12_logo WHERE course ='TRS' ORDER BY id DESC LIMIT 1";
$trs_query = mysqli_query($con, $trs);
$fetch_trs = $trs_query->fetch_assoc();

$ict = "SELECT * FROM college_k12_logo WHERE course ='ICT' ORDER BY id DESC LIMIT 1";
$ict_query = mysqli_query($con, $ict);
$fetch_ict = $ict_query->fetch_assoc();

$gas = "SELECT * FROM college_k12_logo WHERE course ='GAS' ORDER BY id DESC LIMIT 1";
$gas_query = mysqli_query($con, $gas);
$fetch_gas = $gas_query->fetch_assoc();
//end shs query

//college query logo
$bshrm = "SELECT * FROM college_k12_logo WHERE course ='BSHRM' ORDER BY id DESC LIMIT 1";
$bshrm_query = mysqli_query($con, $trs);
$fetch_bshrm = $bshrm_query->fetch_assoc();

$bstm = "SELECT * FROM college_k12_logo WHERE course ='BSTM' ORDER BY id DESC LIMIT 1";
$bstm_query = mysqli_query($con, $bstm);
$fetch_bstm = $bstm_query->fetch_assoc();


$bsis = "SELECT * FROM college_k12_logo WHERE course ='BSIS' ORDER BY id DESC LIMIT 1";
$bsis_query = mysqli_query($con, $bsis);
$fetch_bsis = $bsis_query->fetch_assoc();

$bsais = "SELECT * FROM college_k12_logo WHERE course ='BSAIS' ORDER BY id DESC LIMIT 1";
$bsais_query = mysqli_query($con, $bsais);
$fetch_bsais = $bsais_query->fetch_assoc();

$act = "SELECT * FROM college_k12_logo WHERE course ='ACT' ORDER BY id DESC LIMIT 1";
$act_query = mysqli_query($con, $act);
$fetch_act = $act_query->fetch_assoc();
//end college query


//tesda logo query

$hospi_tech = "SELECT * FROM college_k12_logo WHERE course ='HOSPITALITY TECH' ORDER BY id DESC LIMIT 1";
$hospi_tech_query = mysqli_query($con, $hospi_tech);
$fetch_hospi_tech = $hospi_tech_query->fetch_assoc();

$tm_tech = "SELECT * FROM college_k12_logo WHERE course ='TOURISM TECH' ORDER BY id DESC LIMIT 1";
$tm_tech_query = mysqli_query($con, $tm_tech);
$fetch_tm_tech = $tm_tech_query->fetch_assoc();

$pn = "SELECT * FROM college_k12_logo WHERE course ='PRACTICAL NURSING' ORDER BY id DESC LIMIT 1";
$pn_query = mysqli_query($con, $pn);
$fetch_pn = $pn_query->fetch_assoc();

$cg = "SELECT * FROM college_k12_logo WHERE course ='CAREGIVING' ORDER BY id DESC LIMIT 1";
$cg_query = mysqli_query($con, $cg);
$fetch_cg = $cg_query->fetch_assoc();

 ?>