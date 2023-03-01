<!-- form start -->
<!-- readonly permet de recuperer la valeur d'un champ disabled -->

            <form action="" method="POST">

                <div class="card-body">
                    <div class="form-group">
                        <label >Login</label>
                        <input type="text" class="form-control" name="login" id="login" >
                    </div>                    

                    <!-- DESACTIVE $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
                    <div style="display: none;" class="form-group" id="blockMatiere">
                        <label for="matiere">Matières</label>
                        <div>
                            <select class="form-control" name="matiere" id="matiere">
                                <option value="" selected > rien</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: none;" class="form-group">
                        <label for="semestre">Semestre</label>
                        <div>
                            <select class="form-control" name="semestre" id="semestre" >
                               <option value="" selected > rien</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: none;" class="form-group">
                        <label for="classe">Classe</label>
                        <div>
                            <select class="form-control" name="classe" id="classe" > <!-- a remplir avec les informations de la BD -->
                                <optgroup label="STIC">
                                   <option value="" selected >rien</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- FIN  DESACTIVE $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->


                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>