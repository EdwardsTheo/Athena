<?php
//------- Récupère les donnée pour le grpah ----------
    require('../Model/request.php');
    
    $request3 = getValideExercice_chap1();
    $request4 = getReturnedExercice_chap1();
    $request5 = getInProgressExercice_chap1();

    $request6 = getValideExercice_chap2();
    $request7 = getReturnedExercice_chap2();
    $request8 = getInProgressExercice_chap2();

    $request9 = getValideExercice_chap3();
    $request10 = getReturnedExercice_chap3();
    $request11 = getInProgressExercice_chap3();

    $request12 = getValideExercice_chap4();
    $request13 = getReturnedExercice_chap4();
    $request14 = getInProgressExercice_chap4();

    $request15 = getValideExercice_chap5();
    $request16 = getReturnedExercice_chap5();
    $request17 = getInProgressExercice_chap5();
    
    require('recup_count_graph.php');
//---------------------------------------------------------

    require_once ('../jpgraph/src/jpgraph.php');
    require_once ('../jpgraph/src/jpgraph_bar.php');
    require_once ('../jpgraph/src/jpgraph_line.php');

    //Défintion d'une bar
    $data3y=array($valide_chap1, $valide_chap2, $valide_chap3, $valide_chap4, $valide_chap5);
    $data4y=array($in_progress_chap1,$in_progress_chap2, $in_progress_chap3, $in_progress_chap4, $in_progress_chap5);
    $data5y=array($returned_chap1, $returned_chap2, $returned_chap3, $returned_chap4, $returned_chap5);
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

    $chapter = array('chapter1','chapter2', 'chapter3', 'chapter 4', 'chapter 5');
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
    $b3plot->SetLegend("Validé");

    $b4plot->SetColor("#DA70D6");
    $b4plot->SetFillColor("#DA70D6");
    $b4plot->SetLegend("En attente");

    $b5plot->SetColor("#9370DB");
    $b5plot->SetFillColor("#9370DB");
    $b5plot->SetLegend("return");

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