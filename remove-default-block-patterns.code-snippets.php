<?php

/**
 * Remove default block patterns
 *
 * This will remove the default patterns that come with WordPress
 */
function fn_removeCorePatterns() {
  remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'fn_removeCorePatterns');
