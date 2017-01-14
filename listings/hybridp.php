<?php
//<a href=\"" . $row ['Page'] . "\"><img src=\"" . $row ['Photo'] . "\" class=\"img-responsive listimg\" alt=\"premiumlisting\"></a>
  echo "
    <div class=\"col-md-12 listingpadding\">

      <div class=\"col-md-4 listingpadding\">

        <div id=\"carouselpremium\" class=\"carousel slide\" data-ride=\"carousel\">

          <div class=\"carousel-inner\" role=\"listbox\">

            <div class=\"item active\">

              <div class=\"google-maps\">
                <iframe class=\"\" src=\"" . $row ['Photo'] . "\" width=\"300\" height=\"150\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
              </div>

            </div>

            <div class=\"item\">

              <div class=\"google-maps\">
                <iframe class=\"\" src=\"" . $row ['Map'] . "\" width=\"300\" height=\"150\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
              </div>


            </div>

          </div>

        </div>

      </div>


      <div class=\"col-md-4 middlebtmpad\">
        <h4 class=\"list-group-item-heading\">" . $row ['Name'] . "</h4>
        <p class=\"list-group-item-text\">" . $row ['Address'] . "</p>
        <p class=\"list-group-item-text\">" . $row ['Phone'] . "</p>
        <p class=\"list-group-item-text\">" . $row ['Email'] . "</p>
      </div>
      <div class=\"col-md-4 middlebtmpad\">
        <p class=\"list-group-item-text\">" . $row ['SDescription'] . "</p>
        <a href=\"" . $row ['Page'] . "\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"../img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
      </div>

      <div class=\"col-md-12 middlebtmpad\">
        <h6 class=\"list-group-item-heading\">Filters: " . $row ['Filters'] . "</h6>
      </div>

    </div>
  ";

?>