<div class="heading">    
            <p class="heading_primary heading_class">
                Corrigez l'éval de <?php echo htmlspecialchars($_POST['name']); ?>
            </p>
        </div>
        <div class="form_button">
            <form action="index.php?action=add_evaluation.php" method="POST" class="form_index form_main">
                <?php formStudent();?>
                <input type="submit" class="btn_news" name="showStudent" value="Montrer l'évaluation" id="btn">
                <input type='hidden'  name='status' value='<?php echo $_POST['status']; ?>'>
                <?php hiddenEval(); ?>
            </form>
        </div>
        <?php 
        if(isset($_POST['student'])) {
            ?>
        <section class="main_add_exo main_add_class">
            <div class="box_ressource ressource_add">
                <div class="choose_chapter">
                    <div class="heading_zone">    
                        <p class="heading_zone_class heading_ressource">
                        Exercices de l'évaluation
                        </p>
                    </div>
                   
                    <?php
                    while($data = $request->fetch()) {
                        ?>
                        <form action="index.php?action=add_evaluation.php" method="POST" class="form_index">
                            <input type="submit" class="btn_index btn_add_exo" name="showExo" value="<?php echo $data['nom_exo_eval']; ?>" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo" name="id_exo" value="<?php echo $data['id_exo_eval']; ?>" id="btn">
                            <input type='hidden'  name='status' value='<?php echo $_POST['status']; ?>'>
                            <input type='hidden'  name='student' value='<?php echo $_POST['student']; ?>'>
                            <?php hiddenEval(); ?>
                        </form>
                        <?php
                    }
                    $request->closeCursor();
                       
                    ?>
                    </div> 
                </div>
            </div>
            <?php
            if(isset($_POST['showExo'])) {
                while($data = $request_exo->fetch()) {
                    $consigne = $data['contenu_exo_eval'];
                    $titre = $data['nom_exo_eval'];
                }
                $input = "<input type='submit' class='btn btn--green btn_bottom2' name='modifExoEval' value='Modifier cet exercice' id='btn'>";
            }
            else {
                $consigne = "Consigne de l'exercice";
                $titre = "Titre de l'exercice";
                $input = "<input type='submit' class='btn btn--green btn_bottom2' name='addExoEval' value='Ajouter un exercice' id='btn'>";
            }
            ?>
            <div class="box_text">
                    <div class="box_ressource order">
                        <div class="heading_zone">
                         <div class="input_text">
                         <form action="index.php?action=add_evaluation.php" method="POST" class="form_bottom">  
                                <p><?php echo $titre; ?></p>
                            </div>
                        </div>
                        <div class="text_area_consigne">
                            <p><?php echo $consigne; ?></p>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST['id_exo'])) {
                        $i = 0;
                        while($data = $requestCorr->fetch()) {
                            $i++;
                            $contenu = $data['contenu_eval'];
                        ?>
                    <div class="drop">
                    <div class="box_drop">
                        <div class="heading_zone">
                            <p class="contenu_new">
                                Exercice de l'eval
                            </p>    
                        </div>
                        <svg class="box_drop_svg">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-install"></use>
                        </svg>
                    </div>
                    </div>
                    <?php 
                        } 
                        if($i == 0) {
                            echo "L'élève n'a pas rendu d'exercice !";
                        }
                    } ?>
                
                    <div class="validation val">
                    </div> 
                    </form>
                </div>
        </section> 
        <?php 
        }
        ?>
    </body>
</html>