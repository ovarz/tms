<button title="Back to Top" id="btt" class="content_center hide">
  <?php require ($_SERVER['TMS'].'img/icon/back-to-top.svg')?>
</button>



<div id="" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box">
      <div class="rancak-popup-content">
        tes
      </div>
    </div>
    <div class="rancak-popup-bottom content_center">
      <button title="Close Popup" class="rancak-popup-close"><?php require ($_SERVER['TMS'].'img/icon/close.svg')?></button>
    </div>
  </div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php if($layout == 'home') { ?>
    <link rel="stylesheet" type="text/css" href="css/hold-home.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php } ?>
  <?php if($layout == 'dashboard') { ?>
    <link rel="stylesheet" type="text/css" href="css/hold-dashboard.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php } ?>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js?<?php echo $anticache; ?>"></script>
</body>
</html>