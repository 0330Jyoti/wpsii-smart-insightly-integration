<div class="loader"></div>

<form method="post" action="<?php echo admin_url('/admin.php?page=wpsii-smart-insightly-mappings') ?>" id="wpsii-smart-insightly-mappings-form">

    <h2><?php echo esc_html__('Fields Mapping', 'wpsii-smart-insightly'); ?></h2>

    <table class="form-table">
        <!-- WP Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'WP Modules', 'wpsii-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="wp_module">
                    <option><?php echo  esc_html__('Select Module', 'wpsii-smart-insightly'); ?></option>
                    <?php 
                        if($wp_modules){
                            foreach ($wp_modules as $key => $singleModule) {
                                ?>            
                                <option value = "<?php echo $key; ?>"><?php echo esc_html__($singleModule, 'wpsii-smart-insightly'); ?></option>
                                <?php            
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>

        <!-- WP Fields Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'WP Fields', 'wpsii-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="wp_field">
                    <option><?php echo  esc_html__('Please select WP Modules', 'wpsii-smart-insightly'); ?></option>
                </select>
            </td>
        </tr>

        <!-- Insightly Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Insightly Modules', 'wpsii-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="insightly_module">
                    <option><?php echo  esc_html__('Select Insightly Module', 'wpsii-smart-insightly'); ?></option>
                    <?php
                        $insightly_modules_options = "";

                        if($getListModules['modules']){
                            foreach ($getListModules['modules'] as $key => $singleModule) {
                                if( $singleModule['deletable'] &&  $singleModule['creatable'] ){
                    ?>
                                <option value = '<?php echo $singleModule['api_name']; ?>'> 
                                    <?php echo  esc_html__($singleModule['plural_label'], 'wpsii-smart-insightly'); ?>
                                </option>
                    <?php                
                                }
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>

        <!-- Insightly Fields Row -->
       <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Insightly Fields', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="insightly_field">
                    <option><?php echo  esc_html__('Please select Insightly Modules', 'wpszi-smart-insightly'); ?></option>
                </select>
            </td>
        </tr>

        <!-- Insightly Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Status', 'wpsii-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="status">
                    <option value="active"><?php echo esc_html__( 'Active', 'wpsii-smart-insightly' ); ?></option>
                    <option value="inactive"><?php echo esc_html__( 'In Active', 'wpsii-smart-insightly' ); ?></option>
                </select>
            </td>
        </tr>

        <!-- Insightly Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo esc_html__( 'Description', 'wpsii-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <textarea name="description" rows="5" cols="46"></textarea>
            </td>
        </tr>

    </table>

    <p class="submit">
        <input type="submit" name="add_mapping" class="button-primary woocommerce-save-button" value="<?php echo  esc_html__( 'Add Mapping', 'wpsii-smart-insightly' ); ?>">
    </p>
</form>