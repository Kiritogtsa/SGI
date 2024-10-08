
<?php
// deixei isso mais organizado
// ainda nao ta implementado para uso

// so colocar os metodos e atributos que o produto precisa 
// aqui e manipulação direta do produto
class Produto
{
  private int $id;
  public function GetId(): int
  {
    return $this->id;
  }
}

// esta classe gerencia a munipulação dos produtos no banco de dados
// tudo envovendo o banco de dados na parte de produto precisa tar aqui

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
