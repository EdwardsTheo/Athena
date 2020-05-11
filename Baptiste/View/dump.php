<form action="#" method="POST">
            <div class="all">
                <div class="up">
                    <div class="left_up">
                        <div class="test">
                            <div class="deroulant"> Chapitre auquel l'exercice est rattaché
                                <ul class="sous">
                                    <li><input type="radio" name="chapitres" value="chapitre1">Chapitre 1</li>
                                    <li><input type="radio" name="chapitres" value="chapitre2">Chapitre 2</li>
                                    <li><input type="radio" name="chapitres" value="chapitre3">Chapitre 3</li>
                                </ul>
                            </div>
                        </div>
                        <div class="test">
                            <div class="deroulant"> Cours en lien avec l'exercice
                                <ul class="sous">
                                    <li><input type="checkbox" name="cours" value="cours1"><label for="c1"> Cours 1</label></li>
                                    <li><input type="checkbox" name="cours" value="cours2"> Cours 2</li>
                                    <li><input type="checkbox" name="cours" value="cours3"> Cours 3</li>
                                </ul>
                            </div>
                        </div>
                    <textarea id="contenu_ext" name="contenu_ext" cols="20" rows="5" placeholder="Veuillez rentrer ici les ressources externes "></textarea><br/>
                    </div>
                    <div class="right_up">
                        <textarea id="contenu_exer" name="contenu_exer" cols="70" rows="20" placeholder="Veuillez rentrer ici le contenu de l'exercice"></textarea><br/>
                    </div>
                </div>
                <div class="down">
                    <div class="left_down">
                        <div id="dropfile">Drop l'output</div>
                        <input type="submit" name="bouton" value="ajouter" class="btn">
                    </div>
                    </form>
                    
                    <div class="right_down">
                        <a href="#"><button name="chat" id="chat" class="btn">Chat</button></a>
                    </div>
                </div>
            </div>