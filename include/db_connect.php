<?php

class db_connect
{
   public $servename;
   public $username;
   const password = '';
   const database = 'c9';
   const dbport = 3306;
   public $db;
    
    function __construct() {

        $servename = getenv('IP');
        $username = getenv('C9_USER');
        $this->db = new mysqli($servename,$username,self::password,self::database,self::dbport);
        $this->db->set_charset('utf8');
        
        if ($this->db->connect_error)
        {
            die("Connection failed:" . $this->db->connect_error);
        }
       
    }
        
    function select_rows() {
         $re = $this->db->query("select * from score" );
            echo($re->num_rows);
        
    }
    
    function select_game(){
        echo '<link href="../css/bootstrap.min.css" rel="stylesheet">';
        echo '<table class="table table-striped table-bordered table-hover">';
print <<<EOF
<div class="container">
 <table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>司　</th>
            <th>祐子</th>
            <th>俊介</th>
            <th>諒平</th>
        </tr>
        </thead>
        <tbody>
EOF;

        $result = $this->db->query("select * from score where game_code=0000");
        while ($row = mysqli_fetch_assoc($result)) {
            print('<tr>');
            print('<td>');
            print($row['game']);
            print('</td>');
            print('<td>');
            if ($row['man1'] < 0){
                print "false";
            } else{
                print "true";
            }
            print($row['man1']);
            print('</td>');
            print('<td>');
            if ($row['man2'] < 0){
                print "false";
            } else{
                print "true";
            }
            print($row['man2']);
            print('</td>');
            print('<td>');
            if ($row['man3'] < 0){
                print "false";
            } else{
                print "true";
            }
            print($row['man3']);
            print('</td>');
            print('<td>');
            if ($row['man4'] < 0){
                print "false";
            } else{
                print "true";
            }
            print($row['man4']);
            print('諒平'.$row['man4']);
            print('</td>');
            print('</tr>');
        }
print <<< EOM
        </tbody>
    </table>
</div>
EOM;
    }
}

?>
