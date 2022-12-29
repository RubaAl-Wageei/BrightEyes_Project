<?php


class crud{

    public static function connect(){
        try{

        $con=new PDO('mysql:localhost=localhost;dbname=brighteyes','root','');

        echo "succesfully";
        return $con;

    }catch(PDOException $error){

        echo 'the error ' . $error->getMessage();


    }
   
}
public static function selectData(){
    $data = array();
    $con=crud::connect()->prepare("SELECT * FROM users");
    $con->execute();
    $data= $con->fetchAll(PDO::FETCH_ASSOC);
    return    $data;
}

public static function delete(){
    $con=crud::connect()->prepare("UPDATE users SET is_deleted = '1' WHERE id = :id");
    return    $con;
}
public static function selectProductt(){
    $data = array();
    $con=crud::connect()->prepare("SELECT * FROM products");
    $con->execute();
    $data= $con->fetchAll(PDO::FETCH_ASSOC);
    return    $data;
}
public static function deleteProductt(){
    $con=crud::connect()->prepare("UPDATE FROM products WHERE  id = :id");
    return    $con;

}

}