<?php
function main($action,$param){
	if($action=="")
		$fcn="inicio";
	else
		$fcn=$action;

	$fcn($param);

}
function inicio($param){
	global $CFG;
	?>

	<section id="contenido">

	</section>
	<?php
}
?>
