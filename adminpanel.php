<?php
    $mindendata = mysqli_query($adb, "
                    SELECT * 
                    FROM  etelek
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

<div class='admin_box'>
    <form style='text-align:center;' action='datachange_wr.php' method='post'>
        <input type='text'      name='umail'    placeholder=''              >
        <input type='text'      name='uname'    placeholder=''              >
        <input type='text'      name='upw'      placeholder=''              >
        <input type='hidden'    name='ustrid'   placeholder=''              >
        <input type='submit' value='Change'                                 >
    </form>
</div>

<table style=width:70%>
    <tr>
        <th>Azon                </th>
        <th>Neve                </th>
        <th>Ára                 </th>
        <th>KategóriaAzon       </th>
        <th>Leírás              </th>
    </tr>
    <?php
    while( $mindendatarow = mysqli_fetch_array( $mindendata ) )
    {
        print "
            <tr>
                <td>$mindendatarow[etelAz]               </td>
       	        <td>$mindendatarow[nev]               </td>
       	        <td>$mindendatarow[ar]                </td>
                <td>$mindendatarow[katAz]               </td>
                <td>$mindendatarow[leiras]               </td>
            </tr>";
    }
    print "</table>"; 