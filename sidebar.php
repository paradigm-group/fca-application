				<div class="sidebar sidebar-main" role="complementary">

					<?php //if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

						<?php //dynamic_sidebar( 'sidebar-main' ); ?>

					<?php// else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php //endif; ?>

				</div>
