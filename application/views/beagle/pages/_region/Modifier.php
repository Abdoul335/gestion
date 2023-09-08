<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-12">
        <div class="card card-table">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-body">   
                  <?= form_open('Region/modifier/' . $region->id_region, array('class' => 'modal-body form')); ?> 
 
                            
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="nom">Nom :</label>
                                    <input class="form-control form-control-sm" type="text" name="nom"
                                        id="nom"
                                        autocomplete="off" 
                                        value="<?php echo $region->nom ?>" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="pays">Pays :</label>
                                    <?php
                                        $pays = $this->m_pays->get_pays(); 
                                        $options = array();
                                        foreach ($pays as $row) {
                                            $options[$row['id_pays']] = $row['nom'];
                                        }
                                        echo form_label('Pays', 'pays');
                                        echo form_dropdown('pays', $options, $region->id_pays, 'class="form-control"');
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="modal-footer">
                                    <button class="btn btn-secondary modal-close" type="reset" id="idresetmob">
                                        <i class="icon icon-left mdi mdi-undo"></i>&nbsp;ANNULER&nbsp;
                                    </button>
                                    <input class="btn btn-primary md-trigger" type="submit" name="modifier" value="Modifier">
                                </div>
                            </div>
                        
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
