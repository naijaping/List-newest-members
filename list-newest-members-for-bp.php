<?php
/**
 *  Make sure BuddyPress is loaded
 */
if ( !function_exists( 'bp_core_install' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'buddypress/bp-loader.php' ) )
		require_once ( WP_PLUGIN_DIR . '/buddypress/bp-loader.php' );
	else
		return;
}
/*******************************************************************/


/*** Bp list newest members***/


	function bp_list_newest_member_widget ($args) {
		global $bp;

	         extract( $args );
                 echo $before_widget;
		 echo $before_title
		   . 'Recent Member'
		   . $after_title; ?>
		  
         <?php if ( bp_has_members( 'type=newest&max=5' ) ) : ?>
		
	 <ul id="members-list" class="item-list">
	 <?php while ( bp_members() ) : bp_the_member(); ?>
         <li style="padding: 5px 0 29px 0">
         <div class="item-avatar">
         <a href="<?php bp_member_permalink() ?>"><?php bp_member_avatar('type=full&width=40&height=40') ?></a></div>
         <div class="item">
         <div class="item-title"style="font-weight:bold">
	 <a href="<?php bp_member_permalink() ?>"><?php bp_member_name() ?></a>
         </div>
	<?php endwhile; ?>
         </div>
		
	<?php else: ?>

	<div class="widget-error">
	<?php _e( 'Sorry no newest member ', 'buddypress' ) ?>
	</ul></div>

	<?php endif; ?>

<?php echo $after_widget; ?>

<?php
	}

/*******************************************************************/





/*** Register these little widgets :) ***/
register_sidebar_widget('Recent Member','bp_list_newest_member_widget');
?>
