<?php defined('C5_EXECUTE') or die("Access Denied.");
$ps = Loader::helper('form/page_selector');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Choose Page Link</h2>
	<?php echo $ps->selectPage('field_1_link_cID', $field_1_link_cID); ?>
	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_1_link_text">Link Text:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php echo $form->text('field_1_link_text', $field_1_link_text, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>


