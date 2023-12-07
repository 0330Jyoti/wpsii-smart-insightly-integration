<?php
    global $wpdb;
    $fieldlists = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}smart_insightly_field_mapping");
?>
    <h2><?php echo esc_html__('Fields Mapping List'); ?></h2>

    <table id="mapping-list-table" class="wp-list-table widefat fixed striped table-view-list display">
        <thead>
            <th><?php echo esc_html__('Id', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Module', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Field', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Module', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Field', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Status', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Description', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Action', 'wpszi-smart-insightly'); ?></th>
        </thead>

        <tfoot>
            <th><?php echo esc_html__('Id', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Module', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Field', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Module', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Field', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Status', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Description', 'wpszi-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Action', 'wpszi-smart-insightly'); ?></th>
        </tfoot>
        <tbody>
            <!-- WP Modules Row -->
            <?php
                if ( $fieldlists ) {
                    foreach ( $fieldlists as $singlelist ) {
                        ?>
                        <tr>
                            <td><?php echo esc_html__($singlelist->id, 'wpszi-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->zoho_module, 'wpszi-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->zoho_field, 'wpszi-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->wp_module, 'wpszi-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->wp_field, 'wpszi-smart-insightly'); ?></td>
                            <td><?php echo ucfirst( esc_html__($singlelist->status, 'wpszi-smart-insightly') ); ?></td>
                            <td><?php echo esc_html__($singlelist->description, 'wpszi-smart-insightly'); ?></td>
                            <td>
                                <?php if($singlelist->is_predefined != 'yes' ){ ?>
                                    <a href="<?php echo admin_url('admin.php?page=wpsii-smart-insightly-mappings&action=trash&id='.$singlelist->id); ?>">
                                        <button type="submit"><?php echo esc_html__('Delete', 'wpszi-smart-insightly'); ?></button>
                                    </a>
                                <?php }?>
                            </td>
                        </tr>
                        <?php
                    }   
                } else {
                    ?>
                    <tr>
                        <td colspan="7">
                            <?php echo esc_html__('No Record Found', 'wpszi-smart-insightly'); ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>