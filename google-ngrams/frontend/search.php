<?php

$word=$_GET["word"];
$link = mysql_connect("localhost","root","fair123");
if (!$link)
{
die('Could not connect: ' . mysql_error());
}
else 
{

    $db_name = "ngram";
    $tbl_name="1gram";
    $db_selected = mysql_select_db($db_name, $link); 
    if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error()); }
    
    $sql_select ="SELECT * from $tbl_name WHERE word='$word' ";
    $result = mysql_query($sql_select);
    if (!result){
        echo "got error";
    }
     if (mysql_num_rows($result)){
        echo "<table class='table table-hover'><tr><th>NGRAM</th><th>YEAR</th><th>MATCHES</th><th>VOLUME</th>";
    while ($row = mysql_fetch_row($result)) { 
        echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>'; 
    }
        echo '</table>';
    }
    else {echo "<h4> sorry, there are no matched results </h4>";}
}
mysql_close($link);
?>
