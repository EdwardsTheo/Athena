<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Visu Class</title>
    <link rel="stylesheet" type='text/css' href="../Public/styles/visu_class.css">
</head>
<body>
    <?php require('header.html') ?>
    <center>
    <div class="all" style="margin-bottom:15%">
        <div class="student">
            <a class="lien" href="">Nom de l'élève</a>
        </div>
        <div class="activity">
            <p>Activité récente</p>
        </div>
        <div class="bar">
            <div class="box_progressbar">
                <div class="text-progress">
                    <p class="main-advancement">
                        Avancement Cours 
                    </p>
                </div> 
                <div class="progress-bar">
                    <span style="width: 15%">15%</span>
                </div>
            </div>
            <div class="box_progressbar">
                <div class="text-progress">
                    <p class="main-advancement">
                        Avancement Exerccices
                    </p>
                </div> 
                <div class="progress-bar">
                    <span style="width: 15%">15%</span>
                </div>
            </div>
        </div>
        <div class="chat">
            <table>
                <tr>Chat</tr>
            </table>
                
        </div>
    </div>
    <?php require('footer.html')?>
    </center>
</body>
