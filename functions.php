<?php
function getCard ($title,$img,$place,$kunstenaar,$IconImg) {
  

    echo '<div class="card elinesShadow  hvr-grow ">
          <div class="p-5">
            <img src="'.$img.'" class="card-img-top elinesShadow-sm" alt="..." />
          </div>
          <div class="card-body">
        <h5 class="card-title">'.$title.'</h5>
        <p class="card-text">'.$place.'</p>
        
      </div>
        </div>';

}

?>

