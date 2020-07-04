<?php 

function startProf2(){
    $request = updatePasseWord();
}

function ErrorMessages(){
    if (isset($_POST['mdp']) AND empty($_POST['mdp'])){
        $message = 'Vous devez remplir le champs avant de valider';
    }
    elseif (isset($_POST['mdp']) AND !empty($_POST['mdp'])){
        $message = 'Votre mot de passe a été modifié';
    }
    else {
        $message = ' ';
    }
    echo $message;
}

function editAnnonce($data){
    if(isset($_POST['edit'])){
        echo '<form action="index.php?action=home_prof.php "method="post">
        <textarea class="text_news" id="text_area" name="nouvelle_annonce" placeholder="Titre de votre annonce">'.$data['contenu_annonce'].'</textarea>
        <input type="hidden" name="id_annonce" value="'.$data['id_annonce'].'">
        <input type="submit" class="btn-text btn_news" value="valider" id="btn" name="valider">
        </form>';
    }
    
}

function endEditAnnonce(){
    if(isset($_POST['nouvelle_annonce'])){
        echo '<form action="index.php?action=home_prof.php" method="post">';
        $request3 = getEditAnnonce();
        echo '</form>';
    }
}
function addAnnonce(){
    $request = ajouterAnnonce();
}

function delAnnonce(){
    if(isset($_POST['delete'])){
        $request4 = deleteAnnonce();
    }
}

function refresh(){
    if(isset($_POST['nouvelle_annonce']) OR isset($_POST['add']) OR isset($_POST['valider']) OR isset($_POST['delete'])){
        $delai=1; 
        $url='index.php?action=home_prof.php';
        header("Refresh: $delai;url=$url");
    }
}
?>