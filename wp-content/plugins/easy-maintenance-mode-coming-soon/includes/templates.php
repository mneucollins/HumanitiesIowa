<?php
/**
 * templates.php file
 *
 * using for select templates for coming soon page
 */
?>


 <?php $template = get_option('wbr_soon_pro_template_setting_save');
				$template_value = $template['template_selected']; ?>
 <table class="form-table">
        <tr>
		<th scope="row" class="page-title"><?php _e('Templates','webriti_soon_pro')?></th>
		<td></td>
		</tr>
 </table><br>	
 <table class="form-table">
 <tr>

 <td>

 <div class="template">
	
		<div class="template-screenshot">
			<img src="<?php echo WBR_EM_PLUGIN_URL.'/images/Firefox_Screenshot_2014-01-31T11-04-53.968Z.png';?>" alt="">
		</div>
	
	<h3 class="template-name">Default</h3>
	

	<div class="template-actions">

	
		
		<button class="btn btn-danger" disabled="disabled" id="template1_active" style="vertical-align:middle;">Activated</button>
	

	</div>

	
</div>
 <div class="template">
	
		<div class="template-screenshot">
			<a   href="http://webriti.com/easy-coming-soon-pro-detail-page/"  target= "_new"><img src="<?php echo WBR_EM_PLUGIN_URL.'/images/screenshot-28.png';?>" alt=""></a>
		</div>
	
	<h3 class="template-name">Template1</h3>
	

	<div class="template-actions">

	
		
		<a class="btn btn-danger"  href="http://webriti.com/easy-coming-soon-pro-detail-page/"  target= "_new" style="vertical-align:middle;">Available In Pro</a>
	

	</div>

	
</div>


<div class="template">
	
		<div class="template-screenshot">
		<a   href="http://webriti.com/easy-coming-soon-pro-detail-page/"  target= "_new">	<img src="<?php echo WBR_EM_PLUGIN_URL.'/images/screenshot-31.png';?>" alt=""></a>
		</div>
	
	<h3 class="template-name">Template2</h3>
	

	<div class="template-actions">

		
		
		<a class="btn btn-danger"  href="http://webriti.com/easy-coming-soon-pro-detail-page/"  target= "_new" style="vertical-align:middle;">Available In Pro</a>
		
	

	</div>

	
</div>

</td>
</tr>

</table>	
 
 