<?php
require 'config/connexion.php';
/************************************************/
/******************** PARAMETRE *****************/
/************************************************/
$record_per_page = 3;
$page = "";
$output = "";

if (isset($_POST["page"])) {
	$page = $_POST["page"];
}else {
	$page = 1;
}

$start_from = ($page - 1) * $record_per_page;
$query = "SELECT * FROM personnage ORDER BY id DESC LIMIT $start_from,$record_per_page";
$result =  $bdd->query($query);
$output .= "
	<table class='table table-bordered'>
		<tr>
			<th width='50%'>Name</th>
			<th width='50%'>Phone</th>
		</tr>
";
while ($donnees = $result->fetch())
{
	$output .="
		<tr>
			<td>".$donnees['nom']."</td>
			<td>".$donnees['force']."</td>
		</tr>
	";
}
$output .=	"</table><br><div align='center'>";
$page_query = "SELECT * FROM personnage ORDER BY id DESC";
$page_result =  $bdd->query($page_query);
$total_records =  $page_result->rowCount();
$total_pages = ceil($total_records/$record_per_page);
$output .= "<nav aria-label='navigation'>
  				<ul class='pagination pagination-lg justify-content-center'>";
for ($i=1; $i <= $total_pages; $i++) { 
	$output .= "<li class='page-item' id='".$i."'><a class='page-link' href='#'>".$i."</a></li>";
}
$output .= "</ul>
		</nav>";

echo $output;
