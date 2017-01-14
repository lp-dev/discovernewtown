<?php

  // echo "
  //   <div class=\"col-md-12 listingpadding\">
  //     <div class=\"col-md-4 listingpadding middlebtmpad\">
  //       <a href=\"signup.php\" target=\"_blank\" \"><img src=\"img/basic/listingimg.jpg\" class=\"img-responsive listimg\" alt=\"basiclisting\"></a>
  //     </div>
  //     <div class=\"col-md-4 middlebtmpad\">
  //       <h4 class=\"list-group-item-heading\">" . $row ['Name'] . "</h4>
  //       <p class=\"list-group-item-text\">" . $row ['Address'] . "</p>
  //       <p class=\"list-group-item-text\">" . $row ['Phone'] . "</p>
  //     </div>
  //     <div class=\"col-md-4 middlebtmpad\">
  //       <button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/nowebpage.png\" alt=\"nowebpage\">More info</button>
  //     </div>
  //   </div>
  // ";

  echo "
      <div class=\"col-md-12 listingpadding middlebtmpad\">

        <div class=\"col-md-4 listingpadding\">
          <a href=\"../signup.php\" target=\"_blank\" \"><img src=\"../img/basic/listingimg.jpg\" class=\"img-responsive listimg\" alt=\"basiclisting\"></a>
        </div>

        <div class=\"col-md-4 middlebtmpad\">
          <h4 class=\"list-group-item-heading\">" . $row ['Name'] . "</h4>
          <p class=\"list-group-item-text\">" . $row ['Address'] . "</p>
          <p class=\"list-group-item-text\">" . $row ['Phone'] . "</p>
        </div>

        <div class=\"col-md-4 middlebtmpad\">
          <button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"../img/btns/nowebpage.png\" alt=\"nowebpage\">More info</button>
        </div>

        <div class=\"col-md-12\">
          <h6 class=\"list-group-item-heading\">Filters: " . $row ['Filters'] . "</h6>
        </div>

      </div>
  ";


?>