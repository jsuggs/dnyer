<?php
/*
Plugin Name: FeedBurner Subscription Widget (English)
Version: 1.2 (Transalation)
Plugin URI: http://tech4lives.com
Description: Ads a customizable feedburner email subscription form with an optional subscribers counter.
Author: Technology 4 Lives
Author URI: http://www.tech4lives.com
*/

function widget_feedburner_subscription_init() {



	// Verify the sidebar them create the widget
	if ( !function_exists('register_sidebar_widget') ) {
		return;
    	}
	// Widget options
	function widget_feedburner_subscription($args) {
		// $args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys. Default tags: li and h2.
		extract($args);
		// Each widget can store its own options. We keep strings here.
		$options = get_option('widget_feedburner_subscription');
		$title = $options['title'];
	    // FeedBurner Stats widget options
            $fb_id_user = $options['fb_id_user'];
	    $fb_bgcolor = $options['fb_bgcolor'];
	    $fb_fgcolor = $options['fb_fgcolor'];
	    $fb_anim = $options['fb_anim'];
	    $fb_readers = $options['fb_readers'];
	    $fb_cred = $options['fb_cred'];
	    $fb_hotm = $options['fb_hotm'];
	    $fb_gmai = $options['fb_gmai'];
	    $fb_stats = $options['fb_stats'];
	    $url_params = $options['url_params'];
	    if ( $url_params == "" ) {
            $url_params = 'bg=' . substr($fb_bgcolor,1) .'&amp;fg=' . substr($fb_fgcolor,1) . '&amp;anim=' . $fb_anim. '&amp;label=' . $fb_readers;
	    }
		// Widget feedburner subscription counter
        echo $before_widget;
		if (!empty($title)) {
            		echo $before_title . $title . $after_title;  
        	}

		$cierre_final='';
		$cierre_hotm='';
		$cierre_gmai='';
$fb_cred='1';
		if ($fb_cred=='1') {
		$cierre_final='';
		}

		print '<div id="suscribetefb" style="text-align:left;">';
		if (!empty($fb_id_user)) {
		$url_fb_blog_ini=get_bloginfo('wpurl');
		print '		
		<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri='.$fb_id_user.'\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true" id="suscribetefbform">
		<input type="text" value="Enter Email" onfocus="if (this.value == this.defaultValue) this.value = \'\';" onblur="if (this.value == \'\') this.value = this.defaultValue;" name="email" class="suscribetefbinput" style="width:110px;" />
		<!--<input type="image" src="'; echo $url_fb_blog_ini; print '/wp-content/plugins/feedburner-subscription-widget/images/subscribesubmit.png" class="suscribetefbsubmit"/>-->
		<input type="submit" value="Subscribe" class="suscribetefbsubmit"/>
		<input type="hidden" value="'.$fb_id_user.'" name="uri"/>
		<input type="hidden" value="en_US" name="loc"/>
		</form>';


			if ($fb_stats=='1') {
			print '<br /><a href="http://feeds.feedburner.com/'. $fb_id_user . '" rel="nofollow"><img src="http://feeds.feedburner.com/~fc/' . $fb_id_user . '?' . $url_params . '" height="26" width="88" style="border:0" alt="" /></a>';
			}
			//fin de impresion
			}
		else{print 'Configure the <strong>Feedburner User!!</strong><br />';}
	echo ''.$cierre_final;


		//echo '<h4 style="display:inline;">Without email? Create <a href="http://www.tecnologiadiaria.com/2009/08/abrir-correo-hotmail-com.html" title="hotmail correo">Hotmail.com</a></h4> ';



	echo '</div><!--fin del div suscribe-->';
	echo $after_widget;
	}
	// This is the function that outputs the form to let the users edit
	// the widget's settings. It's an optional feature that users cry for.
	function widget_feedburner_subscription_control() {

		$url_fb_blog=get_bloginfo('wpurl');
		// Get our options and see if we're handling a form submission.
		$options = get_option('widget_feedburner_subscription');
		if ( !is_array($options) )
			$options = array('title'=>'Subscribe for free',
					 'fb_id_user'=>'', 
					 'fb_bgcolor'=>'#0099FF',
					 'fb_fgcolor'=>'#444444',
					 'fb_anim'=>'1',
					 'fb_readers'=>'readers',
					 'fb_cred'=>'1',
					 'fb_hotm'=>'1',
					 'fb_gmai'=>'1',
					 'fb_stats'=>'1',
					 'fb_mails'=>'1',
					 'url_params'=>'');
		if ( $_POST['feedburner-stats-submit'] ) {
			// Remember to sanitize and format use input appropriately.
			$options['title'] = strip_tags(stripslashes($_POST['title']));          
			$options['fb_id_user'] = strip_tags(stripslashes($_POST['fb_id_user']));
			$options['fb_stats'] = strip_tags(stripslashes($_POST['fb_stats']));
			$options['fb_mails'] = strip_tags(stripslashes($_POST['fb_mails']));
			$options['fb_anim'] = strip_tags(stripslashes($_POST['fb_anim']));
			$options['fb_cred'] = strip_tags(stripslashes($_POST['fb_cred']));
			$options['fb_hotm'] = strip_tags(stripslashes($_POST['fb_hotm']));
			$options['fb_gmai'] = strip_tags(stripslashes($_POST['fb_gmai']));

			if(preg_match('((#)[0-9a-fA-F]{6})',$_POST['fb_bodyColor'])){  
				$options['fb_bgcolor'] = strip_tags(stripslashes($_POST['fb_bodyColor']));}
			else { $options['fb_bgcolor'] = '#0099FF';}
			if(preg_match('((#)[0-9a-fA-F]{6})',$_POST['fb_textColor'])){  
				$options['fb_fgcolor'] = strip_tags(stripslashes($_POST['fb_textColor']));}
			else { $options['fb_fgcolor'] = '#444444';}
			if(preg_match('([a-fA-F])',$_POST['fb_textReader'])){  
				$options['fb_readers'] = strip_tags(stripslashes($_POST['fb_textReader']));}
			else { $options['fb_readers'] = 'readers';}
				
			update_option('widget_feedburner_subscription', $options);
		}
		// Be sure you format your options to be valid HTML attributes.
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$fb_id_user = htmlspecialchars($options['fb_id_user'], ENT_QUOTES);
		$fb_bgcolor = htmlspecialchars($options['fb_bgcolor'], ENT_QUOTES);
		$fb_fgcolor = htmlspecialchars($options['fb_fgcolor'], ENT_QUOTES);
		$fb_anim = htmlspecialchars($options['fb_anim'], ENT_QUOTES);	
		$fb_stats = htmlspecialchars($options['fb_stats'], ENT_QUOTES);
		$fb_readers = htmlspecialchars($options['fb_readers'], ENT_QUOTES);	
		$fb_cred = htmlspecialchars($options['fb_cred'], ENT_QUOTES);
		$fb_hotm = htmlspecialchars($options['fb_hotm'], ENT_QUOTES);
		$fb_gmai = htmlspecialchars($options['fb_gmai'], ENT_QUOTES);
		// Here is our little form segment. Notice that we don't need a
		// complete form. This will be embedded into the existing form.
?>


    

<div>
<style type="text/css">
div#countPreviewDiv { background-color:<?php echo $fb_bgcolor; ?>; border:solid 1px #444; color:<?php echo $fb_fgcolor; ?>; font:11px Verdana, Arial, sans; text-align:center; height:16px; margin: 10px auto 4px; padding:3px; vertical-align:middle; width:82px; }
</style>  

    <p><label for="title"><strong>Widget Title</strong> (optional)</label><br />
    <input type="text" name="title" id="title" value="<?php echo $title; ?>" class="widefat" maxlength="50" /></p>



    <p><label for="fb_id_user"><strong>Feedburner User URL</strong> <span style="background: #FFEBE8;">(*required)<span></label><br />
    <input type="text" name="fb_id_user" id="fb_id_user" value="<?php echo $fb_id_user; ?>" class="widefat" maxlength="50" /><br />
    <small><em>(http://feeds.feedburner.com/tech4lives)</em></small></p>

    <p><strong>Subscriber Counter</strong><br />
    <input type="checkbox" name="fb_stats" id="fb_stats" value="1" <?php if($fb_stats=='1'){ echo ' checked="checked"';} ?> class="checkbox" /> <label for="fb_stats">Display counter</label><br />
    <small><em>(recommended if you have more than 100)</em></small></p>



    <p><strong>Counter Style</strong></p>
    <p><input type="radio" name="fb_anim" value="0"<?php if($fb_anim=='0'){ echo' checked="checked"';} ?> id="fb_static" /> <label for="fb_static"><img src="<?php echo $url_fb_blog; ?>/wp-content/plugins/feedburner-subscription-widget/images/static.gif" alt="" /> Static</label></p>
    <p><input type="radio" name="fb_anim" value="1"<?php if($fb_anim=='1'){ echo' checked="checked"';} ?> id="fb_animated" /> <label for="fb_animated"><img src="<?php echo $url_fb_blog; ?>/wp-content/plugins/feedburner-subscription-widget/images/animated.gif" alt="" /> Animated</label></p>

	<p><strong>Counter Color</strong>
           
          <p><input style="text-transform:uppercase" type="text" name="fb_bodyColor" maxlength="7" value="<?php echo $fb_bgcolor; ?>" style="width:80px;" /> Font</label></p>
          <p><input style="text-transform:uppercase" type="text" name="fb_textColor" maxlength="7" value="<?php echo $fb_fgcolor; ?>" style="width:80px;" /> Text</label></p>
           
    <p><label for="fb_readers"><strong>Counter text</strong> (optional)</label><br />
    <input type="text" name="fb_textReader" id="fb_textReader" value="<?php echo $fb_readers; ?>" class="widefat" maxlength="9" /><br />
    <small><em>(default: readers)</em></small></p>

    <p><strong>Counter Preview:</strong></p>
    
    <div id="countPreviewDiv"><?php echo $fb_readers; ?></div>
  
    <input type="hidden" id="feedburner-stats-submit" name="feedburner-stats-submit" value="1" />
  
</div><br />

<p>Another plugin by KnxDT: <a href="http://wordpress.org/extend/plugins/knxdt-bookmarks-wordpress-plugin/" target="_blank">Bookmarks</a></p>

<?php
	}
	// Create the widget to the sidebar
	register_sidebar_widget('FeedBurner Subscription', 'widget_feedburner_subscription');
	// Hacemos que aparezca listado en el la lista de widgets
	register_widget_control('FeedBurner Subscription', 'widget_feedburner_subscription_control', 250, 470);
}

function feedburner_knx_style () {

     echo "<!-- knxdt feedburner subscription widget v1.1 -->\n";
    // echo "<link rel='stylesheet' href='".get_bloginfo('wpurl')."/wp-content/plugins/feedburner-subscription-widget/style.css' type='text/css' />\n";
     echo "<!-- /knxdt feedburner subscription widget -->\n";

}

function widget_feedburner_subscription_end(){
	delete_option('widget_feedburner_subscription');
}

// Run our code later in case this loads prior to any required plugins.
add_action('wp_head', 'feedburner_knx_style');
add_action('plugins_loaded', 'widget_feedburner_subscription_init');
register_activation_hook(__FILE__,'widget_feedburner_subscription_init');
register_deactivation_hook(__FILE__,'widget_feedburner_subscription_end');
?>