<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TITULO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div>
      


      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="mostraModal();">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">Tem algo aqui</span></button>
              <h4 class="modal-title">MODAL TITLE</h4>
            </div>
            <div class="modal-body">
              <p>OPEN MODALES</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
              <button type="button" class="btn btn-primary"> SAVE CHANGES</button>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
