
<div class="container">
<h2>GIFized!</h2>
<?php

@include 'gifize.php';

$imgContent=base64_encode($gif->getAnimation());
echo "<img src=\"data:image/gif;base64,".$imgContent."\" class=\"preview-box\"/>";

?>

</div>

<div id="divAction">

  <a onClick="javascript:history.back()">
  <input type="button" class="fa-input" value="&#xf060; Indietro"></a>
  
  <a download="GIFized.gif" href="<?php echo "data:image/gif;base64,".$imgContent;?>" target="_blank">
  <input type="button" class="fa-input" value="&#xf019; Download!"></a>
  
</div>

