<?php 
///Advanced Custom Fields
$employee_image		                = get_field('employee_image');
$employee_name		                = get_field('employee_name');
$employee_title		                = get_field('employee_title');
$employee_description		        = get_field('employee_description');
 ?>

<div id="employee">
            <img src="<?php echo $employee_image?>" alt="employee image">
            <h5><?php echo $employee_name?></h5>
            <h5><?php echo $employee_title?></h5>
            <p><?php echo $employee_description;?></p>
</div> <!--hero-->