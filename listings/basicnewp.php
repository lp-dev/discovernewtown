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
          <span class='st_facebook_large' displayText='Facebook'></span>
          <span class='st_twitter_large' displayText='Tweet'></span>
          <span class='st_googleplus_large' displayText='Google +'></span>
          <span class='st_pinterest_large' displayText='Pinterest'></span>
          <span class='st_email_large' displayText='Email'></span>
        </div>



        <div class=\"col-md-4 middlebtmpad\">
          <a href=\"http://www.cab.org.nz/ontolicasearch/pages/cabsearchresults.aspx?k=(". $row ['Name'] .")%20(IsNationwide=%27true%27%20or%20(Coverage:%27North%20Island-Greater%20Wellington-Wellington%20City%27))%20scope:%27All%20Content%27\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"../img/btns/webpage.png\" alt=\"nowebpage\">Search Citizens Advice Bureau</button></a>
          <span class='st_facebook_large' displayText='Facebook'></span>
          <span class='st_twitter_large' displayText='Tweet'></span>
          <span class='st_googleplus_large' displayText='Google +'></span>
          <span class='st_pinterest_large' displayText='Pinterest'></span>
          <span class='st_email_large' displayText='Email'></span>
        </div>

        <div class=\"col-md-12\">
          <h6 class=\"list-group-item-heading\">Filters: " . $row ['Filters'] . "</h6>
        </div>

      </div>
  ";

        // <div class=\"col-md-4 middlebtmpad\">
        //   <a href=\"http://www.cab.org.nz/ontolicasearch/pages/cabsearchresults.aspx?k=(". $row ['Name'] .")%20%20scope:%27All%20Content%27\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/nowebpage.png\" alt=\"nowebpage\">More info</button></a>
        // </div>

?>