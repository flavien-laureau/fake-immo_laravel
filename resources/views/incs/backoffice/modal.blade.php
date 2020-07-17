<!-- Modal -->
<div class="modal fade" id="estateModal" tabindex="-1" role="dialog" aria-labelledby="estateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="estateModalLabel">Ajoutez une propriété</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Date d'ajout:</p>
                <p>Derniere modif:</p>
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nom du bien</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" class="form-control" id="type">
                            <option value="house">Maison</option>
                            <option value="apartment">Appartement</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3"
                            max-rows="6"></textarea>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label for="rooms">Nombre de pièces</label>
                            <input type="text" name="rooms" id="rooms" class="form-control">
                        </div>
                        <div class="col">
                            <label for="squareMeters">Mètres carrés</label>
                            <input type="text" name="squareMeters" id="squareMeters" class="form-control">
                        </div>
                        <div class="col">
                            <label for="price">Prix</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success mr-3">Sauvegarder</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>