
<?php

// so colocar os metodos e atributos que o produto precisa 
class Produto
{
  private int $id;
  public function GetId(): int
  {
    return $this->id;
  }
}

class Produtodao
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  private function insert(Produto $produto) {}
  public function update(Produto $produto) {}
  public function persit(Produto $Produto)
  {
    if ($Produto->GetId() != null) {
      $this->insert($Produto);
    } else {
      $this->update($Produto);
    }
  }
}
?>
