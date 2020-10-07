<?php

		
	// Check value exists.
	if( have_rows('flexible_elements') ):

		// Loop through rows.
		while ( have_rows('flexible_elements') ) : the_row();

			if( get_row_layout() == 'flexible_widepanel' ):
				get_template_part('template-parts/flexible-contents/flexible', 'widepanel');
				
			elseif( get_row_layout() == 'flexible_logos' ): 
				get_template_part('template-parts/flexible-contents/flexible', 'logos');

			elseif( get_row_layout() == 'flexible_news' ): 
				get_template_part('template-parts/flexible-contents/flexible', 'news');

			elseif( get_row_layout() == 'flexible_services' ): 
				get_template_part('template-parts/flexible-contents/flexible', 'services');
	
			endif;

		endwhile;


	endif; ?>