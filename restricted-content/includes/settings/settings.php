<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $action, $page, $rsc;
wp_reset_vars( array( 'action', 'page' ) );
$page = sanitize_key( (string) filter_input( INPUT_GET, 'page', FILTER_UNSAFE_RAW ) );
$page = $page ? $page : 1;

$tab = sanitize_key( (string) filter_input( INPUT_GET, 'tab', FILTER_UNSAFE_RAW ) );
if ( empty( $tab ) ) {
    if ( rsc_iw_is_wl() ) {
        $tab = 'general';

    } else {
        $tab = 'welcome';
    }
}

$general_settings = new RC_Settings_General();
$section = $general_settings->get_settings_sections( $tab );
$section = isset( $section[ 0 ] ) ? $section[ 0 ] : array();

$menus = array();

if ( ! rsc_iw_is_wl() ) {
    $menus[ 'welcome' ] = __( 'Welcome', 'restricted-content' );
}

$menus[ 'general' ] = __( 'General', 'restricted-content' );

if ( class_exists( 'Tickera\TC' ) ) {
    $menus[ 'tickera' ] = __( 'Tickera', 'restricted-content' );
}

if ( class_exists( 'WooCommerce' ) ) {
    $menus[ 'woocommerce' ] = __( 'WooCommerce', 'restricted-content' );
}

if ( class_exists( 'Easy_Digital_Downloads' ) ) {
    $menus[ 'edd' ] = __( 'Easy Digital Downloads', 'restricted-content' );
}

$menus = apply_filters( 'rc_settings_new_menus', $menus );

$rsc_heading_class = '';
if ( $tab !== 'welcome' ) {
    $rsc_heading_class = 'rsc-bold-heading';
}
?>
<div class="wrap rsc_outside_wrap nosubsub rsc_outside_<?php echo esc_attr( $tab ); ?>">
    <h1></h1>
    <div class="icon32 icon32-posts-page" id="icon-options-general"><br></div>
    <div class="rsc-settings-header">
        <?php if ( ! rsc_iw_is_wl() ) { ?>
            <div class="rcs-restrict-logo">
                <img src="<?php echo esc_url( $rsc->plugin_url ); ?>assets/images/restrict-logo-2x.png" width="70"/>
                <div class="rsc-version">v<?php echo esc_html( $rsc->version ); ?></div>
            </div>
        <?php } ?>
        <div class="rsc-header-title">
            <h1 class="<?php echo esc_attr( $rsc_heading_class ); ?>"><?php
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Output is being escaped/sanitized using rsc_esc_html().
                echo isset( $section[ 'title' ] ) ? rsc_esc_html( $section[ 'title' ] ) : '';
            ?></h1>
            <span><?php
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Output is being escaped/sanitized using rsc_esc_html().
                echo isset( $section[ 'subtitle' ] ) ? rsc_esc_html( $section[ 'subtitle' ] ) : '';
            ?></span>
        </div>
        <?php if ( ! rsc_iw_is_wl() ) { ?>
            <div class="rsc-documentation-link">
                <a href="<?php echo esc_attr( rsc_get_documentation_link( $tab ) ); ?>" target="_blank" class="rsc-documentation-button"><?php
                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Output is being escaped/sanitized using rsc_esc_html().
                    echo rsc_esc_html( sprintf( /* translators: %s: Documenation url. */ __( 'View %s Documentation', 'restricted-content' ), ( isset( $menus[ $tab ] ) && ! empty( $menus[ $tab ] ) && $tab !== 'welcome' ) ? $menus[ $tab ] : '' ) );
                ?></a>
            </div>
        <?php } ?>
    </div><!-- .rc-settings-header -->
    <?php
    if ( version_compare( phpversion(), '5.3', '<' ) ) { ?>
        <div id="rsc_php_53_version_error" class="error" style="">
            <p><?php
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Output is being escaped/sanitized using rsc_esc_html().
                echo rsc_esc_html( sprintf( /* translators: %s: Current PHP Version. */ __( 'Your current version of PHP is %s and recommended version is at least 5.3. You should contact your hosting company and <a href="https://wordpress.org/about/requirements/">ask for upgrade</a>.', 'restricted-content' ), phpversion() ) ); ?></p>
        </div><?php
    } ?>
    <div class="rsc-nav-tab-wrapper">
        <div class="rsc-nav-inside">
            <ul>
                <?php foreach ( $menus as $key => $menu ) {
                    $tab_url = add_query_arg( array(
                        'page' => $page,
                        'tab' => $key,
                    ), admin_url( 'admin.php' ) );
                    ?>
                    <li>
                        <a class="nav-tab<?php if ( $tab == $key ) echo esc_attr( ' nav-tab-active' ); ?>" href="<?php echo esc_url( $tab_url ); ?>"><?php
                            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Output is being escaped/sanitized using rsc_esc_html().
                            echo rsc_esc_html( $menu ); ?></a>
                    </li>
                <?php } ?>
            </ul>
            <div class="rc-clear"></div>
        </div>
        <?php if ( ! rsc_iw_is_wl() ) { ?>
            <div class="rsc-review-wrap">
                <span><?php esc_html_e( 'Review Restrict at WordPress.org', 'restricted-content' ); ?></span>
                <a href="https://wordpress.org/support/plugin/restricted-content/reviews/#new-post" target="_blank" class="rsc-small-button"><?php esc_html_e( 'Add a Review', 'restricted-content' ); ?></a>
            </div><!-- .rsc-review-wrap -->
            <div class="rsc-documentation-link">
                <a href="https://restrict.io/documentation/" target="_blank" class="rsc-documentation-button"><?php esc_html_e( 'View Documentation', 'restricted-content' ); ?></a>
            </div>
        <?php } ?>
    </div>
    <?php $rsc->rsc_show_tabs( $tab ); ?>
</div>
