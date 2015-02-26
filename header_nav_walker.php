<?php
class AUNSWNavMenuWalker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $temp = '';

    // Creates list element and link
    parent::start_el($temp, $item, $depth, $args);

    // CSS class-ify the post title
    $title_sanitized = preg_replace('/[^A-Za-z]/', '', $item->title);
    $title_sanitized = strtolower($title_sanitized);

    // Add icon before link text, wrap link text
    $temp = preg_replace(
      '/(<a .*?>)(.*?)(<\/a>)/i',
      '${1}
        <span class="item-content ' . $title_sanitized . '">
          <span class="icon"></span>
          <span class="text-wrap">
            <span class="text">${2}</span>
            <span class="subtitle"></span>
          </span>
        </span>
       ${3}', $temp);

    // Output the result
    $output .= $temp;
  }
}
