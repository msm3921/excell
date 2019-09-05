<?php 
///Advanced Custom Fields
$employee_image		                = get_field('employee_image');
$employee_name		                = get_field('employee_name');
$employee_title		                = get_field('employee_title');
$employee_description		        = get_field('employee_description');
 ?>

<div id="employee">
            <img src="<?php echo $employee_image['url']; ?>" alt="<?php echo $employee_image['alt']; ?>">
            <div class=employee-content>
                <h5><?php echo $employee_name?></h5>
                <h6><?php echo $employee_title?></h6>
                <p><?php echo truncate_string($employee_description,150, ' ...'); ?></p>
            </div>
            <button><p>More on <?php echo truncate_string($employee_name,1, ' >>'); ?></p></button>
</div> <!--employee-->