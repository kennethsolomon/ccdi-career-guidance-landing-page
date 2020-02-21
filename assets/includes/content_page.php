<?php
$contentId = $_GET["content"];

   $sql = "SELECT * FROM content WHERE contentId='$contentId'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
           
           $author = $row["author"];
           $title = $row["title"];
           $content = $row["content"];
           $date = $row["date"];
           $fdate = substr($date,1,10);
           echo '
           <div class="container">
                <div class="card card-content" style="width: 100%">
                    <div class="card-body">
                        <center><h1 class="card-title ">'.$title.'</h1> </center>
                        <center><h5 class="card-subtitle mb-2 text-muted card-content-title">'.$author.' - '.$fdate.'</h5></center>
                        <p class="card-text">
                            '.$content.'
                        </p>
                        <!-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> -->
                    </div>
                </div>
            </div>
           ';

       }
   } else {
       echo 'No Result';
   }
   mysqli_close($conn);
