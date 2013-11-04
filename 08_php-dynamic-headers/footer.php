<!-- footer with contact info, etc -->
<div id="footer">

	<!-- dynamically create the current year for copyright notice -->
  <?php
		/* static start year, current full year is always up to date! */
		echo"<p>John Doe, all works &copy; 2009–" . date("Y");	
	?>
  <span style="float:right"><a href="#">Email</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Facebook</a></span></p>	<!-- a span is an inline element, sort of like a paragraph inside a paragraph -->
</div>  
<!-- end footer -->

</div>  <!-- end wrapper -->

</body>
</html>