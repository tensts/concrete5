<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php 
$options = $this->controller->getOptions();
if ($akSelectAllowMultipleValues) { ?>

	<?php  foreach($options as $opt) { ?>
		<div><input type="checkbox" name="<?php echo $this->field('atSelectOptionID')?>[]" value="<?php echo $opt->getSelectAttributeOptionID()?>" <?php  if (in_array($opt->getSelectAttributeOptionID(), $selectedOptions)) { ?> checked <?php  } ?> /><?php echo $opt->getSelectAttributeOptionValue()?></div>
	<?php  } ?>

<?php  } else { ?>
	<select name="<?php echo $this->field('atSelectOptionID')?>[]">
	<?php  foreach($options as $opt) { ?>
		<option value="<?php echo $opt->getSelectAttributeOptionID()?>" <?php  if (in_array($opt->getSelectAttributeOptionID(), $selectedOptions)) { ?> selected <?php  } ?>><?php echo $opt->getSelectAttributeOptionValue()?></option>	
	<?php  } ?>
	</select>

<?php  }