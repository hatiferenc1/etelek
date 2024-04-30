<?php
    $mindendata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
                    ");

    $eloeteldata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
                    WHERE katAz = 1
                    ");

    $levesdata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
                    WHERE katAz = 2
                    ");
    
    $foeteldata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
                    WHERE katAz = 3
                    ");

    $savanyusagdata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
                    WHERE katAz = 4
                    ");

    $italdata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
                    WHERE katAz = 5
                    ");
?>     

<style>
    table {
        margin-left: auto;
        margin-right: auto;
    }

    table, th, td {
        border      : 1px solid black ;
        padding     : 12px;
    }
    th {
        background-color: #6f1cff;
        color: white;
    }
    tr {
        background-color: white;
        color: black;
    }
    tr:nth-child(even) {
        background-color  : #D6EEEE;
    }     
</style>
                    
<div class='frame'>
    <div class="etlap left">
        <form method="get"> 
            <input type="submit" name="minden"      value="Minden"      />
            <input type="submit" name="eloetel"     value="Előételek"   />
            <input type="submit" name="leves"       value="Levesek"     />
            <input type="submit" name="foetel"      value="Főételek"    />
            <input type="submit" name="savanyusag"  value="Savanyuságok"/>
            <input type="submit" name="ital"        value="Italok"      />
            <input type="hidden" name="p"           value="etlap"       />
        </form>
    </div>
    <div class='etlap right'>
        <h1>Étlap</h1>
        <?php
        if(isset($_GET['minden'])) 
        { 
            print "<table style=width:70%>
                <tr>
                    <th>Neve                </th>
                    <th>Ára                 </th>
              </tr>";
        while( $mindendatarow = mysqli_fetch_array( $mindendata ) )
        {
            print "
      	        <tr>
          	        <td>$mindendatarow[nev]               </td>
          	        <td>$mindendatarow[ar]                </td>
      	        </tr>";
        }
        print "</table>"; 
        }
        
        if(isset($_GET['eloetel'])) 
        { 
            print "<table style=width:70%>
                <tr>
                    <th>Neve                </th>
                    <th>Ára                 </th>
              </tr>";
        while( $eloeteldatarow = mysqli_fetch_array( $eloeteldata ) )
        {
            print "
      	        <tr>
          	        <td>$eloeteldatarow[nev]               </td>
          	        <td>$eloeteldatarow[ar]             </td>
      	        </tr>";
        }
        print "</table>"; 
        }

        if(isset($_GET['leves'])) 
        { 
            print "<table style=width:70%>
                <tr>
                    <th>Neve                </th>
                    <th>Ára                 </th>
              </tr>";
        while( $levesdatarow = mysqli_fetch_array( $levesdata ) )
        {
            print "
      	        <tr>
          	        <td>$levesdatarow[nev]               </td>
          	        <td>$levesdatarow[ar]             </td>
      	        </tr>";
        }
        print "</table>"; 
        }

        if(isset($_GET['foetel'])) 
        { 
            print "<table style=width:70%>
                <tr>
                    <th>Neve                </th>
                    <th>Ára                 </th>
              </tr>";
        while( $foeteldatarow = mysqli_fetch_array( $foeteldata ) )
        {
            print "
      	        <tr>
          	        <td>$foeteldatarow[nev]               </td>
          	        <td>$foeteldatarow[ar]             </td>
      	        </tr>";
        }
        print "</table>"; 
        }

        if(isset($_GET['savanyusag'])) 
        { 
            print "<table style=width:70%>
                <tr>
                    <th>Neve                </th>
                    <th>Ára                 </th>
              </tr>";
        while( $savanyusagdatarow = mysqli_fetch_array( $savanyusagdata ) )
        {
            print "
      	        <tr>
          	        <td>$savanyusagdatarow[nev]               </td>
          	        <td>$savanyusagdatarow[ar]             </td>
      	        </tr>";
        }
        print "</table>"; 
        }

        if(isset($_GET['ital'])) 
        { 
            print "<table style=width:70%>
                <tr>
                    <th>Neve                </th>
                    <th>Ára                 </th>
              </tr>";
        while( $italdatarow = mysqli_fetch_array( $italdata ) )
        {
            print "
      	        <tr>
          	        <td>$italdatarow[nev]               </td>
          	        <td>$italdatarow[ar]             </td>
      	        </tr>";
        }
        print "</table>"; 
        }
        ?>
    </div>
</div>