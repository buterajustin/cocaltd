<?php
$output = $title = $link = $size = $el_class = '';
extract( shortcode_atts( array(
	'title' => '',
	'link' => 'http://vimeo.com/92033601',
	'size' => ( isset( $content_width ) ) ? $content_width : 500,
	'el_class' => '',
	'css' => ''

), $atts ) );

if ( $link == '' ) {
	return null;
}
$el_class = $this->getExtraClass( $el_class );

$video_w = ( isset( $content_width ) ) ? $content_width : 500;
$video_h = $video_w / 1.61; //1.61 golden ratio
global $wp_embed;
$embed = $wp_embed->run_shortcode( '[embed width="' . $video_w . '"' . $video_h . ']' . $link . '[/embed]' );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_video_widget wpb_content_element' . $el_class . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$output .= "\n\t" . '<div class="' . $css_class . '">';
$output .= "\n\t\t" . '<div class="wpb_wrapper">';

$output .= '<div class="wpb_video_wrapper">' . $embed . '</div>';
$output .= '<h6 style="margin-top: 15px; margin-bottom: 40px;" >' . $title . '</h6>';

$output .= "\n\t\t" . '</div> ' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( '.wpb_video_widget' );

echo $output;