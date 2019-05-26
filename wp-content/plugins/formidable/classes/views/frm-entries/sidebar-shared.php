<div class="frm_with_icons frm_no_print">
	<h3>
		<?php esc_html_e( 'Entry Actions', 'formidable' ); ?>
	</h3>
	<div class="inside">
		<?php FrmEntriesHelper::actions_dropdown( compact( 'id', 'entry' ) ); ?>
		<?php do_action( 'frm_entry_major_pub', $entry ); ?>
		<div class="clear"></div>

		<?php if ( has_action( 'frm_show_entry_publish_box' ) ) { ?>
			<div id="minor-publishing" class="frm_remove_border">
				<div class="misc-pub-section">
					<?php do_action( 'frm_show_entry_publish_box', $entry ); ?>
					<div class="clear"></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>

<div class="frm_with_icons">
	<h3>
		<?php esc_html_e( 'Entry Details', 'formidable' ); ?>
	</h3>
	<div class="inside">
		<?php include( FrmAppHelper::plugin_path() . '/classes/views/frm-entries/_sidebar-shared-pub.php' ); ?>

		<?php if ( $entry->post_id ) { ?>
			<div class="misc-pub-section frm_no_print">
				<i aria-hidden="true" class="frm_icon_font frm_calendar_icon"></i>
				<?php esc_html_e( 'Post', 'formidable' ); ?>:
				<b><?php echo esc_html( get_the_title( $entry->post_id ) ); ?></b>
				<span>
					<a href="<?php echo esc_url( admin_url( 'post.php?post=' . $entry->post_id . '&action=edit' ) ); ?>">
						<?php esc_html_e( 'Edit', 'formidable' ); ?>
					</a>
					<a href="<?php echo esc_url( get_permalink( $entry->post_id ) ); ?>">
						<?php esc_html_e( 'View', 'formidable' ); ?>
					</a>
				</span>
			</div>
		<?php } ?>

		<div class="misc-pub-section">
			<i class="frm_icon_font frm_fingerprint_icon" aria-hidden="true"></i>
			<?php esc_html_e( 'Entry ID', 'formidable' ); ?>:
			<b><?php echo absint( $entry->id ); ?></b>
		</div>

		<div class="misc-pub-section">
			<i class="frm_icon_font frm_keyalt_icon" aria-hidden="true"></i>
			<?php esc_html_e( 'Entry Key', 'formidable' ); ?>:
			<b><?php echo esc_html( $entry->item_key ); ?></b>
		</div>

		<?php if ( $entry->parent_item_id ) { ?>
			<div class="misc-pub-section">
				<i class="frm_icon_font frm_sitemap_icon" aria-hidden="true"></i>
				<?php esc_html_e( 'Parent Entry ID', 'formidable' ); ?>:
				<b><?php echo esc_html( $entry->parent_item_id ); ?></b>
			</div>
		<?php } ?>
	</div>
</div>

<div class="frm_with_icons">
	<h3><?php esc_html_e( 'User Information', 'formidable' ); ?></h3>
	<div class="inside">
		<?php if ( $entry->user_id ) { ?>
			<div class="misc-pub-section">
				<i class="frm_icon_font frm_user_icon" aria-hidden="true"></i>
				<?php
				printf(
					/* translators: %1$s: User display name. */
					esc_html__( 'Created by: %1$s', 'formidable' ),
					FrmAppHelper::kses( FrmFieldsHelper::get_user_display_name( $entry->user_id, 'display_name', array( 'link' => true ) ), array( 'a' ) )
				); // WPCS: XSS ok.
				?>
			</div>
		<?php } ?>

		<?php if ( $entry->updated_by && $entry->updated_by != $entry->user_id ) { ?>
			<div class="misc-pub-section">
				<i class="frm_icon_font frm_user_icon" aria-hidden="true"></i>
				<?php
				printf(
					/* translators: %1$s: User display name. */
					esc_html__( 'Updated by: %1$s', 'formidable' ),
					FrmAppHelper::kses( FrmFieldsHelper::get_user_display_name( $entry->updated_by, 'display_name', array( 'link' => true ) ), array( 'a' ) )
				); // WPCS: XSS ok.
				?>
			</div>
		<?php } ?>

		<?php if ( ! empty( $entry->ip ) ) { ?>
			<div class="misc-pub-section">
				<i class="frm_icon_font frm_location_icon" aria-hidden="true"></i>
				<?php esc_html_e( 'IP Address:', 'formidable' ); ?>
				<b><?php echo esc_html( $entry->ip ); ?></b>
			</div>
		<?php } ?>

		<?php if ( isset( $browser ) ) { ?>
			<div class="misc-pub-section">
				<i class="frm_icon_font frm_browser_icon" aria-hidden="true"></i>
				<?php esc_html_e( 'Browser/OS:', 'formidable' ); ?>
				<b><?php echo wp_kses_post( $browser ); ?></b>
			</div>
		<?php } ?>

		<?php if ( isset( $data['referrer'] ) ) { ?>
			<div class="misc-pub-section frm_force_wrap">
				<i class="frm_icon_font frm_history_icon" aria-hidden="true"></i>
				<?php esc_html_e( 'Referrer:', 'formidable' ); ?>
				<?php echo wp_kses_post( str_replace( "\r\n", '<br/>', $data['referrer'] ) ); ?>
			</div>
		<?php } ?>

		<?php
		foreach ( (array) $data as $k => $d ) {
			if ( in_array( $k, array( 'browser', 'referrer' ) ) ) {
				continue;
			}
			?>
			<div class="misc-pub-section">
				<i class="frm_icon_font frm_attach_file_icon" aria-hidden="true"></i>
				<?php echo esc_html( ucfirst( str_replace( '-', ' ', $k ) ) ); ?>:
				<b><?php echo wp_kses_post( implode( ', ', (array) $d ) ); ?></b>
			</div>
			<?php
			unset( $k, $d );
		}
		?>
	</div>
</div>
