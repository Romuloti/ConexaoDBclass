<?php

    abstract class ClassConexao{

        #Conexão com o banco de dados
        protected function conectaDB(){
            try{
                $con = new PDO("mysql:host=localhost; dbname=crud", "root", "");
                return $con;
            }catch (PDOException $Erro){
                return $Erro->getMessage();

            }catch(Except $Erro){
                return $Erro-getMessage();


            }

        }

}
abstract class ClassDB{
    
    #Conexão php        
    private function conexaodb(){
        try{
                $conn = new PDO("mysql:host=localhost; dbname=crud", "root", "");
            return $conn;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }catch(Execption $Erro){     
            return $Erro->getMessage();

        }
    }
}
