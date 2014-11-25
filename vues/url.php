<h4><b>MODULE URL</b></h4>
<pre>
<?
print_r($_GET);
 ?>
</pre>
<?echo '<p>*'.$vue.'*</p>';?>
<?if(isset($_SESSION['connexion']))echo '*<p>'.$_SESSION['connexion'].'*</p>';?>
