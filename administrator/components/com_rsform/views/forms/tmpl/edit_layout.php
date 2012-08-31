<?php
/**
* @version 1.4.0
* @package RSform!Pro 1.4.0
* @copyright (C) 2007-2011 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

defined('_JEXEC') or die('Restricted access');
?>
<fieldset>
	<legend><?php echo JText::_('RSFP_CLASSIC_LAYOUTS'); ?></legend>
	<div class="rsform_layout_box">
		<label for="formLayoutInline">
			<input type="radio" id="formLayoutInline" name="FormLayoutName" value="inline" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','inline');" <?php if ($this->form->FormLayoutName == 'inline') echo 'checked="checked"'; ?> /><?php echo JText::_('RSFP_LAYOUT_INLINE');?><br/>
			<img src="components/com_rsform/assets/images/layouts/inline.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayout2lines">
			<input type="radio" id="formLayout2lines" name="FormLayoutName" value="2lines" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','2lines')" <?php if ($this->form->FormLayoutName == '2lines') echo 'checked="checked"'; ?>/><?php echo JText::_('RSFP_LAYOUT_2LINES');?><br/>
			<img src="components/com_rsform/assets/images/layouts/2lines.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayout2colsinline">
			<input type="radio" id="formLayout2colsinline" name="FormLayoutName" value="2colsinline" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','2colsinline')" <?php if ($this->form->FormLayoutName == '2colsinline') echo 'checked="checked"'; ?> /><?php echo JText::_('RSFP_LAYOUT_2COLSINLINE');?><br/>
			<img src="components/com_rsform/assets/images/layouts/2colsinline.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayout2cols2lines">
			<input type="radio" id="formLayout2cols2lines" name="FormLayoutName" value="2cols2lines" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','2cols2lines')" <?php if ($this->form->FormLayoutName == '2cols2lines') echo 'checked="checked"'; ?>/><?php echo JText::_('RSFP_LAYOUT_2COLS2LINES');?><br/>
			<img src="components/com_rsform/assets/images/layouts/2cols2lines.gif" width="175"/>
		</label>
	</div>
	<span class="rsform_clear_both"></span>
</fieldset>

<fieldset>
	<legend><?php echo JText::_('RSFP_XHTML_LAYOUTS'); ?></legend>
	<div class="rsform_layout_box">
		<label for="formLayoutInlineXhtml">
			<input type="radio" id="formLayoutInlineXhtml" name="FormLayoutName" value="inline-xhtml" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','inline-xhtml');" <?php if ($this->form->FormLayoutName == 'inline-xhtml') echo 'checked="checked"'; ?> /><?php echo JText::_('RSFP_LAYOUT_INLINE_XHTML');?><br/>
			<img src="components/com_rsform/assets/images/layouts/inline-xhtml.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayout2linesXhtml">
			<input type="radio" id="formLayout2linesXhtml" name="FormLayoutName" value="2lines-xhtml" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','2lines-xhtml')" <?php if ($this->form->FormLayoutName == '2lines-xhtml') echo 'checked="checked"'; ?>/><?php echo JText::_('RSFP_LAYOUT_2LINES_XHTML');?><br/>
			<img src="components/com_rsform/assets/images/layouts/2lines-xhtml.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayoutResponsive">
			<input type="radio" id="formLayoutResponsive" name="FormLayoutName" value="responsive" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','responsive')" <?php if ($this->form->FormLayoutName == 'responsive') echo 'checked="checked"'; ?>/><?php echo JText::_('RSFP_LAYOUT_RESPONSIVE');?><br/>
			<img src="components/com_rsform/assets/images/layouts/responsive.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayoutBootstrapVertical">
			<input type="radio" id="formLayoutBootstrapVertical" name="FormLayoutName" value="bootstrap-vertical" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','bootstrap-vertical')" <?php if ($this->form->FormLayoutName == 'bootstrap-vertical') echo 'checked="checked"'; ?>/>Bootstrap Vertical<br/>
			<img src="components/com_rsform/assets/images/layouts/2lines-xhtml.gif" width="175"/>
		</label>
	</div>
	<div class="rsform_layout_box">
		<label for="formLayoutBootstrapHorizontal">
			<input type="radio" id="formLayoutBootstrapHorizontal" name="FormLayoutName" value="bootstrap-horizontal" onclick="saveLayoutName('<?php echo $this->form->FormId; ?>','bootstrap-horizontal');" <?php if ($this->form->FormLayoutName == 'bootstrap-horizontal') echo 'checked="checked"'; ?> />Bootstrap Horizontal<br/>
			<img src="components/com_rsform/assets/images/layouts/inline.gif" width="175"/>
		</label>
	</div>
	<span class="rsform_clear_both"></span>
</fieldset>

<fieldset>
	<legend><?php echo JText::_('RSFP_FORM_HTML_LAYOUT'); ?></legend>
	<p><button class="rs_button rs_left" type="button" onclick="generateLayout('<?php echo $this->form->FormId; ?>');"><?php echo JText::_('RSFP_GENERATE_LAYOUT'); ?></button> <label for="FormLayoutAutogenerate"><?php echo JText::_('RSFP_AUTOGENERATE_LAYOUT');?> <input type="checkbox" name="FormLayoutAutogenerate" id="FormLayoutAutogenerate" value="1" <?php echo $this->form->FormLayoutAutogenerate ? 'checked="checked"' : ''; ?> onclick="changeFormAutoGenerateLayout('<?php echo $this->form->FormId; ?>');" /></label></p>
	<table width="100%">
		<tr>
			<td valign="top">
			   <table width="100%" style="clear:both;">
					<tr>
						<td>
							<textarea rows="20" cols="75" style="width:100%;" class="codemirror-html" name="FormLayout" id="formLayout" <?php echo $this->form->FormLayoutAutogenerate ? 'readonly="readonly"' : '';?>><?php echo $this->escape($this->form->FormLayout); ?></textarea>
						</td>
					</tr>
				</table>
			</td>
			<td valign="top" width="1%" nowrap="nowrap">
				<button class="rs_button" type="button" onclick="toggleQuickAdd();"><?php echo JText::_('RSFP_TOGGLE_QUICKADD'); ?></button>
				<span class="rsform_clear_both"></span>
				<div id="QuickAdd1">
					<h3><?php echo JText::_('RSFP_QUICK_ADD');?></h3>
					<?php echo JText::_('RSFP_QUICK_ADD_DESC');?><br/><br/>
					<?php if(!empty($this->quickfields))
						foreach($this->quickfields as $quickfield) { ?>
							<strong><?php echo $quickfield;?></strong><br/>
							<pre>{<?php echo $quickfield; ?>:caption}</pre>
							<pre>{<?php echo $quickfield; ?>:body}</pre>
							<pre>{<?php echo $quickfield; ?>:validation}</pre>
							<pre>{<?php echo $quickfield; ?>:description}</pre>
							<br/>
					<?php } ?>
				</div>
			</td>
		</tr>
	</table>
</fieldset>