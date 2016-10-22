<form method="post" id="frmClips" enctype="multipart/form-data">

  <div class="container">
    <h2>Trascina le tue immagini nei riquadri sottostanti...</h2>
    <div class="upload-box"><input name="upload[]" type="file"></div>
    <div class="upload-box"><input name="upload[]" type="file"></div>
    <div class="upload-box"><input name="upload[]" type="file"></div>
    <div class="upload-box"><input name="upload[]" type="file"></div>
  </div>

  <div id="divAction" style="display:none">
    <label for="delay">Delay (ms):</label>
    <input type="range" id="delay" name="delay" value="500" min="10" step="1" max="1000">
    <input type="text" id="delayValue" value="500">
    <input type="submit" name="go" class="fa-input" value="&#xf085; GIFize it!">
  </div>

</form>

