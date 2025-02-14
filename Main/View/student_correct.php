<div class="heading">    
            <p class="heading_primary heading_class">
                test de <?php echo htmlspecialchars($_POST['name']); ?>
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
                    ?>
                    <?php
                    while($data = $request->fetch()) {
                        ?>
                        <form action="index.php?action=test.php" method="POST" class="form_index">
                            <input type="submit" class="btn_index btn_add_exo" name="showExo" value="<?php echo $data['name_exo_eval']; ?>" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo" name="id_exo" value="<?php echo $data['id_exo_eval']; ?>" id="btn">
                            <input type="hidden" class="btn_index btn_add_exo" name="status" value="<?php echo $_POST['status']; ?>" id="btn">
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
                    $consigne = $data['contents_exo_eval'];
                    $titre = $data['name_exo_eval'];
                }
                $input = "<input type='submit' class='btn btn--green btn_bottom2' name='modifExoEval' value='Modifier cet exercice' id='btn'>";
            }
            else {
                $consigne = "Consigne de l'exercice";
                $titre = "Choisir un exercice";
                $input = "<input type='submit' class='btn btn--green btn_bottom2' name='addExoEval' value='Ajouter un exercice' id='btn'>";
            }
            ?>
            <div class="box_text">
                <div class="box_ressource order">
                    <div class="heading_zone">
                        <div class="input_text"> 
                            <p>Exercice : <?php echo $titre; ?></p>
                        </div>
                        <div class="text_area_consigne">
                           <p><?php echo $consigne; ?></p>
                        </div>
                    </div>
                <?php 
                if(isset($_POST['showExo'])) {
                    ?>
                <div class="drop">
                    <div class="box_drop">
                        <div class="heading_zone">
                            <p class="contents_new">
                                Telecharger l'exercice que vous avez return
                            </p>    
                        </div>
                        <svg class="box_drop_svg">
                            <use xlink:href="Public/svg/symbol-defs.svg#icon-install"></use>
                        </svg>
                    </div>
                </div>
                
                <div class="bottom_button">
                
                    <form action="#" class="form_bottom">
                        <input type="submit" class="btn btn--green btn_bottom2" value="Valider l'exercice" id="btn">
                    </form>
                    
                </div>
                <?php } ?>
            </div>
        </section> 


    <div class="bottom_button">
        <form action="#" class="form_bottom">
            <input type="submit" class="btn btn--green btn_bottom2" value="Valider test" id="btn">
        </form>
    </div>
