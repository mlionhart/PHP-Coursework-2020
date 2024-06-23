<?php 
// if there is a post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   // execute the query
   $result = $db->query($sql);
   // if we get a result back
   if ($result) {
      // echo out bootstrap stuff and call display_record_table with result info
      echo '<div class="alert alert-info">';
      echo '<h2>Search Results</h2>';
      echo '</div>';
      display_record_table($result);
   } else { // if no result:
      '<h2>No Results</h2>';
   }
} else { // if no post, echo default bootstrap and message
   echo '<div class="alert alert-info">';
   echo '<h2>Search results will appear here</h2>';
   echo '</div>';
}
