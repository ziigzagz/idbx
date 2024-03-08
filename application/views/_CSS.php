<link rel="stylesheet" href="<?php echo base_url()?>node_modules\bootstrap\dist\css\bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>node_modules\sweetalert2\dist\sweetalert2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>node_modules\apexcharts\dist\apexcharts.css">
<link rel="stylesheet" href="<?php echo base_url()?>node_modules\highcharts\css\highcharts.css">
<link rel="stylesheet" href="<?php echo base_url()?>node_modules\@fortawesome\fontawesome-free\css\all.css">
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

<!-- End of Google Font -->

<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"
  integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">


<?php
	foreach ($css as $key => $value) { ?>
		<link rel="stylesheet" href="<?php echo base_url()?><?php echo $value;?>">
	<?php }
 ?>
