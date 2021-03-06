<?php 
    $root = 'http://'.$_SERVER['SERVER_NAME'].'/' ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Upload and download any zip file">
        <meta name="author" content="OreoluwaDaniel">

        <link rel="shortcut icon" href="<?= $root ?>assets/images/favicon.ico">

        <title><?php echo $pageTitle ; ?> - Dre Files</title>

        <!-- Plugins css-->
        <link href="<?= $root ?>assets/css/treestyle.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css?v=1.22" rel="stylesheet" />
        <link href="<?= $root ?>plugins/multiselect/css/multi-select.css?v=1.22"  rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>plugins/select2/css/select2.min.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>plugins/bootstrap-select/css/bootstrap-select.min.css?v=1.22" rel="stylesheet" />
        <link href="<?= $root ?>plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css?v=1.22" rel="stylesheet" />

        <!-- App css -->
        <link href="<?= $root ?>assets/css/bootstrap.min.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>assets/css/core.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>assets/css/components.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>assets/css/icons.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>assets/css/pages.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>assets/css/menu.css?v=1.22" rel="stylesheet" type="text/css" />
        <link href="<?= $root ?>assets/css/responsive.css?v=1.22" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= $root ?>plugins/switchery/switchery.min.css?v=1.22">

        
        <link href="<?= $root ?>../plugins/datatables/dataTables.colVis.css?v=1.22" rel="stylesheet" type="text/css"/>
        <link href="<?= $root ?>../plugins/datatables/dataTables.bootstrap.min.css?v=1.22" rel="stylesheet" type="text/css"/>
        <link href="<?= $root ?>../plugins/datatables/fixedColumns.dataTables.min.css?v=1.22" rel="stylesheet" type="text/css"/>


        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?= $root ?>assets/js/modernizr.min.js"></script>

    </head>
