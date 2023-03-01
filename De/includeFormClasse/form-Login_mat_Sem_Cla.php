<!-- form start -->
<!-- readonly permet de recuperer la valeur d'un champ disabled -->
            <form action="" method="POST">

                <div class="card-body">
                    <div class="form-group">
                        <label >Login</label>
                        <input type="text" class="form-control" value="<?= $login?>" name="login" id="login" readonly> 
                    </div>    

                    <div class="form-group" id="blockMatiere">
                        <label for="matiere">Matières</label>
                        <select class="form-control" name="matiere" id="matiere" readonly>
                            <?php
                                $listeMatiere=$info2->recupererCodeMat($matiere);
                                if($listeMatiere->num_rows>0){
                                    while($matiere_info = $listeMatiere->fetch_assoc()){ 
                                        $test= $matiere_info['codeMAT']; ?>
                                        <option value="<?= $matiere_info['codeMAT'] ?>"><?= $matiere ?></option>
                                <?php }
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="semestre">Semestre</label>
                        <select class="form-control" name="semestre" id="semestre" readonly>
                           <?php
                                $liste=$info2->recupererSemestreMat($test);
                                
                                if($liste->num_rows>0){
                                    $element_info = $liste->fetch_assoc();?>
                                    <option value="<?php echo $element_info['semCode'] ?>"><?php echo $element_info['LibelleSMTRE'] ?></option>
                                <?php 
                                }
                                else
                                    echo "<script>alert('Erreur: Impossible de trouver le semestre correspondant à cette matière');</script>"; 
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="classe">Classe</label>
                        <div>
                            <select class="form-control" name="classe" id="classe" > <!-- a remplir avec les informations de la BD -->
                                <?php
                                $listeClasse=$info2->remplirListeClasse();
                                if($listeClasse->num_rows>0){
                                    while($classe_info = $listeClasse->fetch_assoc()){ ?>
                                    <option value="<?php echo $classe_info['CodeCLS'] ?>"><?php echo $classe_info['LibelleCLS'] ?></option>
                                <?php }
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>