<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo (!empty($title)) ? $title : 'សូម​ស្វា​គមន៍'; ?> | មន្ទីរ​ពិសោធន៍​វេជ្ជសាស្ត្រ ប្រណីត</title>
        <meta name="description" content="This is page-header (.page-header &gt; h1)" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="Shortcut Icon" type="image/ico" href="<?php echo site_url(IMG.'favicon.ico') ;?>" />

        <!--basic styles-->

        <link href="<?php echo base_url() . CSS; ?>bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() . CSS; ?>bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() . CSS; ?>fullcalendar.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() . FONT; ?>css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo base_url() . FONT; ?>css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>prettify.css" />

        <!--fonts-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!--        Form-->
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>jquery-ui-1.10.3.custom.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>chosen.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>bootstrap-timepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>daterangepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>colorpicker.css" />
        <!--custom style-->
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>css.css" />
        <!---------------->
        <!--Gritter notification-->
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>jquery.gritter.css" />
        <!---------------->

        <!--W8 and ace styles-->
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>w8.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>ace.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>w8-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>w8-skins.min.css" />
        
        
        
        
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>laboratory.css" />




        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>ace-ie.min.css" />
        <![endif]-->

        <!--inline styles if any-->
        <script src="<?php echo base_url() . JS; ?>jquery.min.js"></script>
        		
        <!--basic scripts-->
        <script src="<?php echo base_url() . JS; ?>bootstrap.min.js"></script>

        <!--Validation-->
        <link rel="stylesheet" href="<?php echo base_url() . CSS; ?>prettify_bootstrap.css" />
        <script src="<?php echo base_url() . JS; ?>jqBootstrapValidation.js"></script>
        <script src="<?php echo base_url() . JS; ?>prettify.js"></script>
        <!----------------->
        
        
        <!--Messages-->
        <script src="<?php echo base_url() . JS; ?>bootbox.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>messages.js"></script>
        <!----------------->
        
        <!--DataTable-->
        <script src="<?php echo base_url() . JS; ?>jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.dataTables.bootstrap.js"></script>
        <!------------>
        
        
    </head>

    <body>
        <div style="display: none;">
            <?php
            echo form_open();
            echo form_hidden('base_url', base_url());
            echo form_close();
            ?>
        </div>


        <?php echo $this->load->view('templates/top'); ?>

        <div class="container-fluid" id="main-container">
            <a id="menu-toggler" href="#">
                <span></span>
            </a>

            <div id="sidebar" class="hidden-print">
                <?php echo $this->load->view('templates/sidebar_shortcuts'); ?>
                <?php echo $this->load->view('templates/sidebar_list'); ?>
                <div id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>

            <div id="main-content" class="clearfix">
                <div class="wrapper-loader hidden-print" style="height: 9px;">
                    <div class="loader" style="display: none;">
                        <div class="progress progress-mini progress-success progress-striped active" data-percent="0%"><div class="bar" style="width: 0%;"></div></div>
                        <!--<p style="padding-left: 20px">Loading...</p>-->
                    </div>
                </div>
                
                
                <div class="message hidden-print"></div>
                <div id="page-content" class="clearfix">
                   
                </div>


        <script src="<?php echo base_url() . JS; ?>jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.ui.touch-punch.min.js"></script>

        <!--Modal-->
        <script src="<?php echo base_url() . JS; ?>bootstrap-modal.js"></script>

        <!--Calenda-->
        <!--<script src="<?php echo base_url() . JS; ?>fullcalendar.min.js"></script>-->
        
        <!------->
        <!--Gritter Notification-->
        <script src="<?php echo base_url() . JS; ?>jquery.gritter.min.js"></script>
        <!------->

        <script src="<?php echo base_url() . JS; ?>jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.easy-pie-chart.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url() . JS; ?>jquery.flot.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.flot.resize.min.js"></script>

        <!--From-->
        <script src="<?php echo base_url() . JS; ?>fuelux.spinner.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>chosen.jquery.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>moment.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>daterangepicker.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.knob.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.autosize-min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>jquery.maskedinput.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>bootstrap-tag.min.js"></script>
        <!------------>

        <!--w8 scripts-->

        <script src="<?php echo base_url() . JS; ?>w8-elements.min.js"></script>
        <script src="<?php echo base_url() . JS; ?>w8.min.js"></script>
        
        
        <script src="<?php echo base_url() . JS; ?>loaders.js"></script>
        
        
    </body>
</html>
