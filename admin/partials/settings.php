<?php
	$wpsii_smart_insightly 				= get_option( 'wpsii_smart_insightly' );
	$wpsii_smart_insightly_settings 	= get_option( 'wpsii_smart_insightly_settings' );
	$api_key 							=  isset($wpsii_smart_insightly_settings['api_key']) ? $wpsii_smart_insightly_settings['api_key'] : "";
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
							<label><?php echo esc_html__( 'API Key', 'wpsii_smart_insightly' ); ?></label>
						</th>
                		<td>
							<input class="regular-text" type="text" name="wpsii_smart_insightly_settings[api_key]" value="<?php echo esc_attr($api_key); ?>" required />
							<br>
							<a href="https://crm.na1.insightly.com/Users/UserSettings">Get API key</a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="inline">
				<p>
					<input type='submit' class='button-primary' name="submit" value="<?php echo esc_html__( 'Save', 'wpsii-smart-insightly' ); ?>" />
				</p>
				<?php 
					if(isset($wpsii_smart_insightly->refresh_token)){
						echo '<p class="success">'.esc_html__('Authorized', 'wpsii-smart-insightly').'</p>';
					}
				?>
			</div>

		<?php }else if( isset($tab) && 'synch_settings' == $tab ){ ?>
			<?php 
				$smart_insightly_obj   = new WPSII_Smart_Insightly();
		        $wp_modules 	= $smart_insightly_obj->wpsii_get_wp_modules();
		        $getListModules = $smart_insightly_obj->wpsii_get_insightly_modules();
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
												<th scope="row"><label><?php echo esc_html__( "Enable {$wp_module_key} to Insightly {$singleModule['api_name']} Sync", 'wpsii-smart-insightly' ); ?></label></th>
												<td>
													<fieldset>
														<label>
															<input 
																type="checkbox" 
																name="wpsii_smart_insightly_settings[synch][<?php echo $wp_module_key.'_'.$singleModule['api_name']; ?>]" 
																<?php @checked( $wpsii_smart_insightly_settings['synch']["{$wp_module_key}_{$singleModule['api_name']}"], 1 ); ?>
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
			<p><input type='submit' class='button-primary' name="submit" value="<?php echo esc_html__( 'Save', 'wpsii-smart-insightly' ); ?>" /></p>
		
		<?php }?>	
		
	</form>
</div>