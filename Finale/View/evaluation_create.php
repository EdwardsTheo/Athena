<div class="heading">    
            <p class="heading_primary heading_class">
                Créer l'éval de <?php echo htmlspecialchars($_POST['name']); ?>
            </p>
        </div>
            
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
                <form action="index.php?action=add_evaluation.php" method="POST" class="form_bottom">  
                    <input type="submit" class="btn btn--green btn_bottom2" name="nothing" value="Retour à l'ajout" id="btn">
                    <?php  hiddenEval(); ?>
                </form>
                    <div class="box_ressource order">
                        <div class="heading_zone">
                         <div class="input_text">
                         <form action="index.php?action=add_evaluation.php" method="POST" class="form_bottom">  
                                <input type="text" class="form_input" name="exoTitle" value="<?php echo $titre; ?>" id="mdp">
                            </div>
                        </div>
                        <div class="text_area_consigne">
                            <textarea class="text_consigne" name="consigne" id="text_area"><?php echo $consigne; ?></textarea>
                        </div>
                    </div>
                    <div class="validation val">
                        <?php
                        echo $input;
                        if(isset($_POST['showExo'])) { 
                            echo "<input type='submit' class='btn btn--green btn_bottom2' name='suppExoEval' value='Supprimer cet exercice'>";
                            echo "<input type='hidden'  name='id_exo' value='$_POST[id_exo]'>";
                        }
                        hiddenEval(); ?>
                    </div> 
                    </form>
                </div>
        </section> 

        <section class="bottom_add_eval">
            <div class="bottom_button">
                <form action="index.php?action=add_evaluation.php" method="POST" class="form_bottom">
                <label for="startTime">Heure de début : </label>
                <input type="time" name="startTime" id="startTime" value="08:45">
                <label for="start">Jour de l'éval:</label>
                <input type="date" id="start" name="date_start">
                <label for="startTime">Heure de fin: </label>
                <input type="time" name="endTime" id="startTime" value="12:30">
                <input type="submit" class="btn btn--green btn_bottom3" name="Valider Eval" value="Lancer le compte à rebours !" id="btn">
                <?php  hiddenEval(); ?>
                </form>
            </div>
        </section> 
