<?php
class AUNSWNavMenuWalker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $temp = '';

    // Creates list element and link
    parent::start_el($temp, $item, $depth, $args);

    // Add icon before link text, wrap link text
    $temp = preg_replace(
      '/(<a .*?>)(.*?)(<\/a>)/i',
      '${1}
        <span class="icon iconic star"></span>
        <span class="text">${2}</span>
        <span class="text-subtitle"></span>
       ${3}', $temp);

    // Output the result
    $output .= $temp;
  }
}
