<?php
	
	$wpsii_smart_insightly 				= get_option( 'wpsii_smart_insightly' );
	$wpsii_smart_insightly_settings 		= get_option( 'wpsii_smart_insightly_settings' );

	$api_key 						=  isset($wpsii_smart_insightly_settings['api_key']) ? $wpsii_smart_insightly_settings['api_key'] : "";
?>

<div class="wrap">                
	
	<h1><?php echo esc_html__( 'Insightly CRM Settings and Authorization' ); ?></h1>
	<hr>

	<form method="post">
		<?php 
			$tab = isset( $_REQUEST['tab'] ) ? $_REQUEST['tab'] : 'general';
		?>

		<nav class="nav-tab-wrapper woo-nav-tab-wrapper">
			<a href="<?php echo admin_url('admin.php?page=wpsii-smart-insightly-integration&tab=general'); ?>" class="nav-tab <?php if($tab == 'general'){ echo 'nav-tab-active';} ?>"><?php echo esc_html__( 'General', 'wpsii-smart-insightly' ); ?></a>
			<a href="<?php echo admin_url('admin.php?page=wpsii-smart-insightly-integration&tab=synch_settings'); ?>" class="nav-tab <?php if($tab == 'synch_settings'){ echo 'nav-tab-active';} ?>"><?php echo esc_html__( 'Synch Settings', 'wpsii-smart-insightly' ); ?></a>
		</nav>
		
		<input type="hidden" name="tab" value="<?php echo esc_html($tab); ?>">

		<?php if( isset($tab) && 'general' == $tab ){ ?>
			
			<table class="form-table general_settings">
				<tbody>

					<tr>
						<th scope="row">
							<label><?php echo esc_html__( 'API KEY', 'wpsii_smart_insightly' ); ?></label>
						</th>
						<td>
							<input class="regular-text" type="text" name="wpsii_smart_insightly_settings[api_key]" value="<?php echo esc_attr($api_key); ?>" required />
						</td>
					</tr>

					<tr>
						<th scope="row">
							<label><?php echo esc_html__( 'Access Token', 'wpszi-smart-zoho' ); ?></label>
						</th>
						<td>
							
							<?php 
								if(isset($wpszi_smart_zoho->access_token)){
									echo esc_html($wpszi_smart_zoho->access_token);
								}
							?>
						</td>
					</tr>

					<tr>
						<th scope="row">
							<label><?php echo esc_html__( 'Refresh Token', 'wpszi-smart-zoho' ); ?></label>
						</th>
						<td>
							<?php 
								if(isset($wpszi_smart_zoho->refresh_token)){
									echo esc_html($wpszi_smart_zoho->refresh_token);
								}
							?>
						</td>
					</tr>
					
				</tbody>
			</table>

			<div class="inline">
				<p>
					<input type='submit' class='button-primary' name="submit" value="<?php echo esc_html__( 'Save & Authorize', 'wpszi-smart-zoho' ); ?>" />
				</p>

				<?php 
					if(isset($wpszi_smart_zoho->refresh_token)){
						echo '<p class="success">'.esc_html__('Authorized', 'wpszi-smart-zoho').'</p>';
					}
				?>
			</div>

		<?php }else if( isset($tab) && 'synch_settings' == $tab ){ ?>
			<?php 
				$smart_zoho_obj   = new WPSZI_Smart_Zoho();
		        $wp_modules 	= $smart_zoho_obj->get_wp_modules();
		        $getListModules = $smart_zoho_obj->get_zoho_modules();
			?>
			<table class="form-table synch_settings">
				<tbody>
					<?php
						if($getListModules['modules']){
					        foreach ($getListModules['modules'] as $key => $singleModule) {
					            if( $singleModule['deletable'] &&  $singleModule['creatable'] ){
					            	foreach ($wp_modules as $wp_module_key => $wp_module_name) {
					            		?>
						            		<tr>
												<th scope="row"><label><?php echo esc_html__( "Enable {$wp_module_key} to Zoho {$singleModule['api_name']} Sync", 'wpszi-smart-zoho' ); ?></label></th>
												<td>
													<fieldset>
														<label>
															<input 
																type="checkbox" 
																name="wpszi_smart_zoho_settings[synch][<?php echo $wp_module_key.'_'.$singleModule['api_name']; ?>]" 
																<?php @checked( $wpszi_smart_zoho_settings['synch']["{$wp_module_key}_{$singleModule['api_name']}"], 1 ); ?>
																value="1" />
																Enable
														</label>
													</fieldset>
												</td>
											</tr>
						            	<?php	
					            	}
					            }
					        }
					    }
					?>    
    				
				</tbody>
			</table>
			<p><input type='submit' class='button-primary' name="submit" value="<?php echo esc_html__( 'Save', 'wpszi-smart-zoho' ); ?>" /></p>
		
		<?php }?>	
		
	</form>
</div>