<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['btn_color'])) {
    $color = $_POST['btn_color'];
    echo '<div class="col-md-3 mb-2">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Bouton de couleur ' . $color . ' cliqué avec succès!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>';
  }

  if (isset($_POST['submit'])) {
    echo '<div class="col-md-12">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Formulaire soumis avec succès!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>';
  }
}
?>
