<?php global $user_ID; if( $user_ID ) :  if( current_user_can('level_10') ) : show_admin_bar(true);
		 else : {  show_admin_bar(false); echo '<style type="text/css" >html{margin:0 !important;} #wpadminbar{display:none; visibility: hidden;}</style>'; } endif; endif;
		?>