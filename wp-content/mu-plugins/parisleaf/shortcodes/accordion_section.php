<?php

// SHORTCODE: Accordion Section
//
// input: [accordion_section title="" description="" video-src-mp4="" video-src-ogv="" image-src="" image-width="1280" image-height="720" image-focus-x="0.5" image-focus-y="0.5"]

function pl_accordion_section($atts, $content = null) {

  // Clean attributes
  $clean_atts = array_map('sanitize_text_field', $atts);

  // Default attributes and values
  $default_atts = [
    "title"         => "",
    "description"   => "",
    "video-src-mp4" => "",
    "video-src-ogv" => "",
    "image-src"     => "",
    "image-width"   => "1280",
    "image-height"  => "720",
    "image-focus-x" => "0.5",
    "image-focus-y" => "0.5",
  ];

  // Check provided attributes against defaults
  $html_data_output = '';
  foreach ($default_atts as $key => $value) {
    if (array_key_exists($key, $clean_atts)) {
      $html_data_output .= ' data-accordion-'.$key.'="'.$clean_atts[$key].'"';
    } else {
      $html_data_output .= ' data-accordion-'.$key.'="'.$default_atts[$key].'"';
    }
  }

  // Begin shortcode output
  ob_start();

?>

<div class="accordion-section-shortcode" <?= $html_data_output; ?>></div>

<?php

  return ob_get_clean();
}

add_shortcode('accordion_section', 'pl_accordion_section');
