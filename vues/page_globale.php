<!-- structure de la page de présentation principale -->
<!DOCTYPE html>
<html>

	<? require_once("head.php");?>

	<body>
	    <div class="container">

	        <header class="row">
	        	<div class="col-lg-3">
	        		<?require_once("logo.php");?>
	        	</div>
	        	<div class="col-lg-6">
	        		<?require_once("notifications.php");?>
	        	</div>
	        	<div class="col-lg-3">
	        		<?require_once("connexion.php");?>
	        	</div>        	
		        <div class="col-lg-12">
	    	    	Titre
	        	</div>
	    	</header>

	    	<div class="row">

		        <div class="col-lg-2">
		          	<div class="row">
			            <aside class="col-lg-12">
			        		<?require_once("module.php");?>
			            </aside>
			            <aside class="col-lg-12">
			        		<?require_once("module.php");?>
			            </aside>
		          	</div>
		        </div>

		        <section class="col-lg-8">
		        	<div class="row">
			        	<?require_once("menu.php");?>
			        </div>
		        	<div class="row">		        
			        	<?require_once("section.php");?>
			        </div>
		        </section>

		        <div class="col-lg-2">
		          	<div class="row">
		            	<aside class="col-lg-12">
			        		<?require_once("module.php");?>
		            	</aside>
		            	<aside class="col-lg-12">
			        		<?require_once("module.php");?>
		            	</aside>
		            </div>
		        </div>

		    </div>

		    <footer class="row">
		        <div class="col-lg-12">
			    	<?require_once("footer.php");?>
		        </div>
		    </footer>

	    </div>
	</body>
</html>


