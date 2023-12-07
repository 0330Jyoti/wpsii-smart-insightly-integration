<?php
    global $wpdb;
    $fieldlists = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}smart_insightly_field_mapping");
?>
    <h2><?php echo esc_html__('Fields Mapping List'); ?></h2>

    <table id="mapping-list-table" class="wp-list-table widefat fixed striped table-view-list display">
        <thead>
            <th><?php echo esc_html__('Id', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Module', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Field', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Module', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Field', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Status', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Description', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Action', 'wpsii-smart-insightly'); ?></th>
        </thead>

        <tfoot>
            <th><?php echo esc_html__('Id', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Module', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Zoho Field', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Module', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('WP Field', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Status', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Description', 'wpsii-smart-insightly'); ?></th>
            <th><?php echo esc_html__('Action', 'wpsii-smart-insightly'); ?></th>
        </tfoot>
        <tbody>
            <!-- WP Modules Row -->
            <?php
                if ( $fieldlists ) {
                    foreach ( $fieldlists as $singlelist ) {
                        ?>
                        <tr>
                            <td><?php echo esc_html__($singlelist->id, 'wpsii-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->insightly_module, 'wpsii-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->insightly_field, 'wpsii-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->wp_module, 'wpsii-smart-insightly'); ?></td>
                            <td><?php echo esc_html__($singlelist->wp_field, 'wpsii-smart-insightly'); ?></td>
                            <td><?php echo ucfirst( esc_html__($singlelist->status, 'wpsii-smart-insightly') ); ?></td>
                            <td><?php echo esc_html__($singlelist->description, 'wpsii-smart-insightly'); ?></td>
                            <td>
                                <?php if($singlelist->is_predefined != 'yes' ){ ?>
                                    <a href="<?php echo admin_url('admin.php?page=wpsii-smart-insightly-mappings&action=trash&id='.$singlelist->id); ?>">
                                        <button type="submit"><?php echo esc_html__('Delete', 'wpsii-smart-insightly'); ?></button>
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
                            <?php echo esc_html__('No Record Found', 'wpsii-smart-insightly'); ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>