<?php

use Lib\Server\Connection;

class Gallery
{
   public $name;
   public $imagem;

   public function setImagem($imagem)
   {
      $this->imagem = $imagem;
   }
   public function setName($name)
   {
      $this->name = $name;
   }
   public function getName()
   {
      return $this->name;
   }
   public function getImagem()
   {
      return $this->imagem;
   }

   public function inserirImagem()
   {
      $conn = Connection::connDb();
      $sql = "INSERT INTO dados(nome_img, path) VALUES(:n, :i)";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':n', $this->name);
      $stmt->bindValue(':i', $this->imagem);
      $stmt->execute();
   }
   public static function selectImagem()
   {
      $conn = Connection::connDb();
      $sql = "SELECT * FROM dados";
      $sql = $conn->prepare($sql);
      $sql->execute();
      $result = array();
      while($row = $sql->fetchObject('Gallery') ){
         $result[] = $row;
      }
      return $result;
   }
}
