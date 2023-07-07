<?

function all($table, $field = '*'){
    try{
        $connect = connect();
        
        $query = $connect->query("select {$field} from {$table}");
        return $query->fetchAll();
    }catch(PDOException $e){
        var_dump($e->getMessage());
    }
}