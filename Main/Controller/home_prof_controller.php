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

function editnews($data){
    if(isset($_POST['edit'])){
        echo '<form action="index.php?action=home_prof.php "method="post">
        <textarea class="text_news" id="text_area" name="nouvelle_news" placeholder="Titre de votre news">'.$data['contents_news'].'</textarea>
        <input type="hidden" name="id_news" value="'.$data['id_news'].'">
        <input type="submit" class="btn-text btn_news" value="valider" id="btn" name="valider">
        </form>';
    }
    
}

function endEditnews(){
    if(isset($_POST['nouvelle_news'])){
        echo '<form action="index.php?action=home_prof.php" method="post">';
        $request3 = getEditnews();
        echo '</form>';
    }
}
function addnews(){
    $request = ajouternews();
}

function delnews(){
    if(isset($_POST['delete'])){
        $request4 = deletenews();
    }
}

function refresh(){
    if(isset($_POST['nouvelle_news']) OR isset($_POST['add']) OR isset($_POST['valider']) OR isset($_POST['delete'])){
        $delai=1; 
        $url='index.php?action=home_prof.php';
        header("Refresh: $delai;url=$url");
    }
}
?>