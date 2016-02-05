<?php
class score_view 
{
    function __construct(){
        
    }
    function get_view($data){
        $result = $data->db->query("select * from score where game_code=0000");
        while ($row = mysqli_fetch_assoc($result)) {
            print('<tr>');
            print('<td>');
            print($row['game']);
            print('</td>');
            if ($row['man1'] < 0){
                print "<td class=\"danger\">{$row['man1']}</td>";
            }else{
                print "<td>{$row['man1']}</td>";
            }
            if ($row['man2'] < 0){
                print "<td class=\"danger\">{$row['man2']}</td>";
            }else{
                print "<td>{$row['man2']}</td>";
            }
            if ($row['man3'] < 0){
                print "<td class=\"danger\">{$row['man3']}</td>";
            }else{
                print "<td>{$row['man3']}</td>";
            }
            if ($row['man4'] < 0){
                print "<td class=\"danger\">{$row['man4']}</td>";
            }else{
                print "<td>{$row['man4']}</td>";
            }
        }
    }
}
