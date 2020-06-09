<?php 
    require_once("Model/request.php");
    if (isset($_POST["rubrique"])) {
        $rubrique = $_POST["rubrique"];
        if ($rubrique != "") {
            if (isset($_POST["resources"])) {
                $resources = $_POST["resources"];
                if ($resources != "") {
                    if (isset($_POST["name"])) {
                        $name = $_POST["name"];
                        if($name != "") {
                            if (isset($_POST["instruction"])) {
                                $instruction = $_POST["instruction"];
                                if ($instruction != "") {
                                   /*if (isset($_POST["output"])) {
                                        //$output = $_POST["output"];
                                        //if ($output != ""){*/
                                            if (isset($_POST["button"])){
                                                $btn = $_POST["button"];
                                                $o_name = $_POST["old_name"];
                                            }
                                            else{
                                                $btn = "add";
                                                $o_name = "";
                                            }
                                            if(!isset($_POST["index"])){
                                                $request = findIndex($rubrique);
                                                $result = "notfind";
                                                while($data = $request->fetch()){
                                                    $id_2 = intval($data["index_exercice"])+1;
                                                    $index = $id_2;
                                                    $result = "find";
                                                }
                                                if($result == "notfind"){
                                                    $index = 1;
                                                }
                                                $request->closeCursor();
                                            }
                                            else{
                                                $index = $_POST["index"];
                                            }
                                            
                                            verifyEx($rubrique, $instruction, $name, $resources, $btn, $o_name, $index);
                                        /*}
                                        else{
                                            header("Location: index.php?action=add_exercice.php&error=6");
                                            exit();
                                        }
                                    }
                                    else{
                                        header("Location: index.php?action=add_exercice.php&error=1");
                                        exit();
                                    }*/
                                }
                                else{
                                    header("Location: index.php?action=add_exercice.php&error=5");
                                    exit();
                                }
                            }
                            else{
                                header("Location: index.php?action=add_exercice.php&error=1");
                                exit();
                            }
                        }
                        else{
                            header("Location: index.php?action=add_exercice.php&error=4");
                            exit();
                        }
                    }
                    else{
                        header("Location: index.php?action=add_exercice.php&error=1");
                        exit();
                    }
                }
                else{
                    header("Location: index.php?action=add_exercice.php&error=3");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=add_exercice.php&error=1");
                exit();
            }
        }
        else{
            header("Location: index.php?action=add_exercice.php&error=2");
            exit();
        }
    }
    else{
        header("Location: index.php?action=add_exercice.php&error=1");
        exit();
    }
