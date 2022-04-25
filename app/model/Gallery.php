<?php

use Lib\Server\Connection;

class Gallery
{
   public $name;
   public $imagem;
   public $totalP;
   public $stmt;

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
      $sql = "INSERT INTO dados (nome_img, path) VALUES(:n, :i)";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':n', $this->name);
      $stmt->bindValue(':i', $this->imagem);
      $stmt->execute();
   }
   public function selectImagem()
   {
      $conn = Connection::connDb();
      $stmt = $conn->prepare("SELECT COUNT(*) FROM dados");
      $stmt->execute();
      $totalR = $stmt->fetchColumn();
      
      $porPagina = 5;
      $page = isset($_GET['page']) ?  $_GET['page'] : 1;
      $x = ($page - 1) * $porPagina;
      $y = $porPagina;
      
      $this->totalP = ceil($totalR / $porPagina);

      $sql = "SELECT  * FROM `dados` ORDER BY `id` LIMIT $x,$y";
      $sql = $conn->prepare($sql);
      $sql->execute(); 
      
      $result = array();
      while ($row = $sql->fetchObject('Gallery')) {
         $result[] = $row;
      }
      return $result;
   }
}
