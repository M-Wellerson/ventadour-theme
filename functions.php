<?php



// Allow Featured Images
add_theme_support('post-thumbnails');

// Remove admin bar
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

;

// Prevent HTTP Error when uploading images to the back office
add_filter('wp_image_editors', 'change_graphic_lib');
function change_graphic_lib($array)
{
    return array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick');
}

;

function truncate($string, $length, $stopanywhere = false)
{
    //truncates a string to a certain char length, stopping on a word if not specified otherwise.
    if (strlen($string) > $length) {
        //limit hit!
        $string = substr($string, 0, ($length - 3));
        if ($stopanywhere) {
            //stop anywhere
            $string .= '...';
        } else {
            //stop on a word.
            $string = substr($string, 0, strrpos($string, ' ')) . '&nbsp;&hellip;';
        }
    }
    return $string;
}

function get_image_url($id, $size = 'full')
{
    $att = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size);
//		if(empty($att)) {
//			$o_ID = icl_object_id($id, 'post', false, 'pt-br');
//			$att = wp_get_attachment_image_src( get_post_thumbnail_id($o_ID), $size);
//		}
    return $att[0];
}

function get_gallery($id)
{
    $gallery = json_decode(get_post_meta($id, '_rsw_gallery_images', true));
    if (empty($gallery)) {
        $o_ID = icl_object_id($id, 'post', false, 'pt-br');
        $gallery = json_decode(get_post_meta($o_ID, '_rsw_gallery_images', true));
    }
    return $gallery;
}

function addValuesTo($newValues, $array) {
	array_push($array,$newValues);
}


function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDPJ_VxNIHdbXDAf8ar9qUJjN-a733Nw80';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
