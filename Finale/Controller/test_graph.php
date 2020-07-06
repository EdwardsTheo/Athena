<?php // content="text/plain; charset=utf-8"
require('View/visu_class.php');
require('../Controller/connexion.php');
require('../Model/request.php');

connexion_db();
getExerciceStudent();
$request = $valide;
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');
require_once ('jpgraph/src/jpgraph_line.php');


//bar3
$data3y=array($valide,8,10,1);
$data4y=array(5,2,6,2);
$data5y=array(10,1,0,14);
//line1
$data6y=array(5,5,6,5);
foreach ($data6y as &$y) { $y -=10; }

// Create the graph. These two calls are always required
$graph = new Graph(750,320,'auto');
$graph->SetScale("textlin");
$graph->SetY2Scale("lin",0,9);
$graph->SetY2OrderBack(false);

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->SetMargin(40,20,46,80);

$graph->yaxis->SetTickPositions(array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15), array(5,10,15,20));
$graph->y2axis->SetTickPositions(array(3,4,5,6,7,8,9));

$chapter = array('Chapitre1','Chapitre2', 'Chapitre3', 'Chapitre 4');
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
// Setup month as labels on the X-axis
$graph->xaxis->SetTickLabels($chapter);

// Create the bar plots


$b3plot = new BarPlot($data3y);
$b4plot = new BarPlot($data4y);
$b5plot = new BarPlot($data5y);

// Create the grouped bar plot
$gbbplot = new AccBarPlot(array($b3plot,$b4plot,$b5plot));
$gbplot = new GroupBarPlot(array($gbbplot));

// ...and add it to the graPH
$graph->Add($gbplot);


$b3plot->SetColor("#8B008B");
$b3plot->SetFillColor("#8B008B");
$b3plot->SetLegend("En attente");

$b4plot->SetColor("#DA70D6");
$b4plot->SetFillColor("#DA70D6");
$b4plot->SetLegend("Validé");

$b5plot->SetColor("#9370DB");
$b5plot->SetFillColor("#9370DB");
$b5plot->SetLegend("Rendu");

$graph->legend->SetFrameWeight(1);
$graph->legend->SetColumns(6);
$graph->legend->SetColor('#4E4E4E','#00A78A');

$band = new PlotBand(VERTICAL,BAND_RDIAG,11,"max",'khaki4');
$band->ShowFrame(true);
$band->SetOrder(DEPTH_BACK);
$graph->Add($band);

$graph->title->Set("Exercices");

// Display the graph
$graph->Stroke();
?>