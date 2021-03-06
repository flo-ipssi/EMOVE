<!-- Modal -->
<div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="ModalUser" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="firstname" placeholder="Nom">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="lastname" placeholder="Prénom">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="role">Rôle</label>
            </div>
            <select class="custom-select" id="role">
              <option>Administrateur</option>
              <option>Utilisateur</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-birthday-cake"></i></span>
            </div>
            <div class="well">
              <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
            </div>
            <div class="well"> 
            </div>

          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker "></i></span>
            </div>
            <input type="text" class="form-control" name="adress" placeholder="Adresse">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
            </div>
            <input type="numero" class="form-control" id="numero" placeholder="Numéro">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" id="chexk_password" placeholder="Confirmer le mot de passe">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="new_car" tabindex="-1" role="dialog" aria-labelledby="ModalCar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau Véhicule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="type"><i class="fa fa-fw fa-car"></i></label>
            </div>
            <select class="custom-select" id="type">
              <option>Voiture</option>
              <option>Scooter</option>
            </select>
            <div class="input-group-prepend">
              <label class="input-group-text" for="dispo"><i class="fa fa-fw fa-clock-o"></i></label>
            </div>
            <select class="custom-select" id="dispo">
              <option>Disponible</option>
              <option>Occupé</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="agency"><i class="fa fa-fw fa-map"></i></label>
            </div>
            <select class="custom-select" id="agency">
              <option>Paris</option>
              <option>Lyon</option>
            </select>
          </div>
          <hr/>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-car"></i></span>
            </div>
            <input type="text" class="form-control" name="marque" placeholder="Marque">
              <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-car"></i></span>
            </div>
            <input type="text" class="form-control" name="modele" placeholder="Modele">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-car"></i></span>
            </div>
            <input type="text" class="form-control" name="num_serie" placeholder="N° Serie">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-thumb-tack"></i></span>
            </div>
            <input type="text" class="form-control" name="couleur" placeholder="Couleur">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-car"></i></span>
            </div>
            <input type="text" class="form-control" name="immatriculation" placeholder="N° Immatriculation">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-road"></i></span>
            </div>
            <input type="text" class="form-control" name="nbkm" placeholder="Kilometrage">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-credit-card"></i></span>
            </div>
            <input type="text" class="form-control" name="date_achat" placeholder="Date d'achat">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-credit-card"></i></span>
            </div>
            <input type="text" class="form-control" name="prix_achat" placeholder="Prix d'achat">
          </div>
          <div class="input-group mb-3">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Enregistrer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="new_agency" tabindex="-1" role="dialog" aria-labelledby="ModalAgency" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel Agence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map"></i></span>
            </div>
            <input type="text" class="form-control" name="ville" placeholder="ville">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Enregistrer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

