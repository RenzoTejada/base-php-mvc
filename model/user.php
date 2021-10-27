<?php

class user
{
    //Atributo para conexión a SGBD
    private $pdo;

    //Método de conexión a SGBD.
    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function getUser($id)
    {
        try {
            //Sentencia SQL para selección de datos.
            $stm = $this->pdo->prepare("
            SELECT * FROM user WHERE id = {$id} order by id desc;
            ");
            //Ejecución de la sentencia SQL.
            $stm->execute();
            //fetchAll — Devuelve un array que contiene todas las filas del conjunto
            //de resultados
            return $stm->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            //Obtener mensaje de error.
            die($e->getMessage());
        }
    }


}
