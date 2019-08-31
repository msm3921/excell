<?php 
///Advanced Custom Fields
$list_type			= get_field('list_type');
$list_items			= get_field('list_items');
$list_type2			= get_field('list_type_2');
$list_items2		= get_field('list_items_2');
 ?>

<div id="list">
        <p><?php echo $list_type;?></p>
            <div><?php echo $list_items;?></div>
        <p><?php echo $list_type2;?></p>
           <div><?php echo $list_items2;?></div>    
</div> <!--hero-->