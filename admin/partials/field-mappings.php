<div class="loader"></div>

<form method="post" action="<?php echo admin_url('/admin.php?page=wpszi-smart-zoho-mappings') ?>" id="wpszi-smart-zoho-mappings-form">

    <h2><?php echo esc_html__('Fields Mapping', 'wpszi-smart-insightly'); ?></h2>

    <table class="form-table">
        <!-- WP Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'WP Modules', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="wp_module">
                    <option><?php echo  esc_html__('Select Module', 'wpszi-smart-insightly'); ?></option>
                    <?php 
                        if($wp_modules){
                            foreach ($wp_modules as $key => $singleModule) {
                                ?>            
                                <option value = "<?php echo $key; ?>"><?php echo esc_html__($singleModule, 'wpszi-smart-insightly'); ?></option>
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
                <label><?php echo  esc_html__( 'WP Fields', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="wp_field">
                    <option><?php echo  esc_html__('Please select WP Modules', 'wpszi-smart-insightly'); ?></option>
                </select>
            </td>
        </tr>

        <!-- Zoho Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Zoho Modules', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="zoho_module">
                    <option><?php echo  esc_html__('Select Zoho Module', 'wpszi-smart-insightly'); ?></option>
                    <?php
                        $zoho_modules_options = "";

                        if($getListModules['modules']){
                            foreach ($getListModules['modules'] as $key => $singleModule) {
                                if( $singleModule['deletable'] &&  $singleModule['creatable'] ){
                    ?>
                                <option value = '<?php echo $singleModule['api_name']; ?>'> 
                                    <?php echo  esc_html__($singleModule['plural_label'], 'wpszi-smart-insightly'); ?>
                                </option>
                    <?php                
                                }
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>

        <!-- Zoho Fields Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Zoho Fields', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="zoho_field">
                    <option><?php echo  esc_html__('Please select Zoho Modules', 'wpszi-smart-insightly'); ?></option>
                </select>
            </td>
        </tr>

        <!-- Zoho Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo  esc_html__( 'Status', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <select name="status">
                    <option value="active"><?php echo esc_html__( 'Active', 'wpszi-smart-insightly' ); ?></option>
                    <option value="inactive"><?php echo esc_html__( 'In Active', 'wpszi-smart-insightly' ); ?></option>
                </select>
            </td>
        </tr>

        <!-- Zoho Modules Row -->
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label><?php echo esc_html__( 'Description', 'wpszi-smart-insightly' ); ?></label>
            </th>
            <td class="forminp forminp-text">
                <textarea name="description" rows="5" cols="46"></textarea>
            </td>
        </tr>

    </table>

    <p class="submit">
        <input type="submit" name="add_mapping" class="button-primary woocommerce-save-button" value="<?php echo  esc_html__( 'Add Mapping', 'wpszi-smart-insightly' ); ?>">
    </p>
</form>