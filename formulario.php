<?php
    include('head.php');
    include('arreglos.php');
?>
<!--Formulario-->
<div class="row">
    <div class="col-12">
        <div class="rectangle mt-4 mb-4">
            <h3 class="px-4 py-4">Añade tu contenido</h3>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form>
              <div class="mb-3">
                <label for="exampleInputText1" class="form-label"><p>Artista de tu preferencia</p></label>
                <input type="text" class="form-control" id="exampleInputText1" aria-describedby="artistHelp">
                <div id="artistHelp" class="form-text"><p>Gracias!! Con tu contribución aumentaremos nuestra biblioteca ♡</p></div>
              </div>
      
              <div class="mb-3">
                <label for="exampleInput" class="form-label"><p>Descripción breve del artista</p></label>
                <input type="text" class="form-control" id="exampleInput">
              </div>
      
              <div class="mb-3">
                  <label for="exampleInput2" class="form-label"><p>Canciones que no puedes parar de escuchar</p></label>
                  <input type="text" class="form-control" id="exampleInput2">
              </div>
      
              <br>
      
              <div class="mb-3">
                  <label for="TryingInput" class="form-label"><p>Imagen del artista</p></label>
                  <input type="image" class="form-control" id="TryingInput">
              </div>
      
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><p>Todo listo y en orden owo</p></label>
              </div>

<div class="container">
    <div class="row mb-4">
        <div class= "col text-center">
              <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </div>

<?php
    include('footer.php');
?>