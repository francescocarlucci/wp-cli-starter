<?php
/**
 * Plugin Name: WP-CLI Starter Command
 * Plugin URL: https://carluc.ci
 * Description: A starter custom WP-CLI command
 * Author: Francesco Carlucci
 * Version: 1.0.0
 * Author URI: https://carluc.ci
 */

if( defined('WP_CLI') && WP_CLI ) {

  class WP_CLI_Starter {

    public function run( $args, $assoc_args ) {

      $num = $assoc_args['num'];

      $progress = \WP_CLI\Utils\make_progress_bar( 'Running...', $num );

      for( $i=0; $i < $num; $i++ ) {

        WP_CLI::line($i);

        $progress->tick();

      }

      $progress->finish();

      WP_CLI::success( 'Finish!');

    }

  }

  WP_CLI::add_command( 'wps', 'WP_CLI_Starter' );

}
