<?php 

//importar el archivo que tiene la conexion a la base de datos
require_once './app/model/model.db.php';

//clase producto donde uso el modelo de la conexion
class ProductModel extends Model {

    //por cada consulta haces una funcion
    public function getAllGategories(){

        //prepara la consulta a la base de datos
        $query = $this->db->prepare('SELECT * FROM categorias');
        //ejecutar la consulta
        $query->execute();
        //guardamos la consulta en una variable, me traigo TODOS (All) los datos
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        //retornar las categorias
        return $categories;
    }


    /*
    categories = [
    {
    id: 1,
    nombre_categoria: 'Verano'
    },{},{},{}]
    */

    // Importante: En cada ítem siempre se debe mostrar el nombre de la categoría a la que pertenece.
    public function getProductById($id){

        $query = $this->db->prepare('SELECT * FROM products WHERE id=?');
    
        $query->execute([$id]);
    
        $product = $query->fetch(PDO::FETCH_OBJ);
    
        return $product;
    }
}