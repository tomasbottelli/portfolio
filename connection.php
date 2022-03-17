
        <?php
            $status=@mysqli_connect("loalhost", "root", ""); // local
            if (!$status) { // if server is down, do:
                ?> Cannot connect, server down? <?php
            } else { 
                $notesTable=@mysqli_select_db($status, "notesTable"); // notes table
                if (!$notesTable){ // if notes table doesn´t work, do:
                    ?> Can connect, but the table was not found. <?php
                }
            }
        ?>