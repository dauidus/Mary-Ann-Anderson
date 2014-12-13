		</div> <!-- end #content -->
	</div> <!-- end #container -->

<div style="width:800px; margin:0px auto 0px auto; padding:80px 0 0px 0; ">
	<div style="float:left;">
		<p><?php elegant_titles(); ?> &nbsp; | &nbsp; Mary Ann Anderson &nbsp; | &nbsp; &copy; 
		<?php
			if ( (date( 'Y' ) == '2011') ) {
				print '2012';
			} else {
				print '2012 - ';?><?php echo date( "Y" );
			}
		?> 
		</p>
	</div>

		<div class="copyright-text-right">
				<div id="credit">
					<a id="dd" href="http://www.dauidusdesign.com/" target="_blank">
						<div id="dauidusdesign">from the studio of Dauidus Design</div>
					</a>
				</div>
            </div>

</div>
	
	<?php wp_footer(); ?>
</body>
</html>