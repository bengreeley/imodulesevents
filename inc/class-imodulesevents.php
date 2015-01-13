<?php

if( !class_exists( 'iModulesEvents' ) ) {
	class iModulesEvents {
		
		public function __construct() {
			add_shortcode('display-sortedrss', array( $this,'render_events') );
		}
		
		/* Grabs iModules event feed, sorts returned items by date that is output in returned item description field... */
		public function render_events ($atts) {
			$return = '';
			$dateArray = array();
			
			extract( shortcode_atts( array(
				'title' => '',			// Default title for section
				'count' => '3',		// # of events of output
				'url' => '',			// Feed URL to pull
				'rss_item_search' => '<span style="font-weight: bold">Date:</span>' // Format of indicator date. Assumption is next next is of date/time format.
			), $atts, 'display-sortedrss' ) );
			
			if( !strlen( $url ) ) {
				return '';
			}
			
			ob_start();
		
			$rss = fetch_feed( $url );
			
			if (!is_wp_error( $rss ) ) {
				$maxitems = $rss->get_item_quantity( $count ); 
				$rss_items = $rss->get_items( 0, 0 );
			}
			else {
				return '';
			}
			
			// Create array of dates for sorting by key...
			$uniquenum = 0;
			
			foreach ( $rss_items as $item ) {
				$itemDate = explode( ' ', trim( str_ireplace( $rss_item_search, '', $item->get_description() ) ) );
				
				$itemKey = strtotime($itemDate[0]) . $uniquenum++;
				
				$dateArray[$itemKey] = '<li><a href="'.esc_url( $item->get_permalink() ).'">'.esc_html( $item->get_title() ).'</a><br />'.trim(str_ireplace('<span style="font-weight: bold">Date:</span>','',$item->get_description())).'</li>';
			}
			
			// Sort by key ascending...
			ksort($dateArray);
			
			if(strlen($title))
				echo '<h3>'.$title.'</h3>';
			
			echo '<ul>';
			
			$counter = 0;
			
			foreach( $dateArray as $item ){
				if ( $counter++ < $maxitems ) {
					echo $item;		
				}
			}
			
			echo '</ul>';
		
			$return = ob_get_contents();
			ob_end_clean();
			
			return $return;
		}
	}
}