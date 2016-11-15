<html>
<?php
    class Vendedora{
        public $nome;
        public $telefone;
        public $email;

        static $instances=array();
        public function __construct() {
            Vendedora::$instances[] = $this;
        }
    }
    class Proprietaria{
        public $nome;
        public $telefone;
        public $email;
    }
    class Produto{
        public $nome;
        public $codigo;
        public $preco;

        static $instances=array();
        public function __construct() {
            Produto::$instances[] = $this;
        }
    }
    class Venda{
        public $valor;
        public $vendedora;
        public $data;
        public $tipo;

        static $instances=array();
        public function __construct() {
            Venda::$instances[] = $this;
        }

        public function get_vendedora() {
        // This is where you get the related instances
        if ($this->vendedora === false) {
            $this->vendedora = db_fetch('vendedora', $this->get_id());
        }
        return $this->vendedora;
        }
    }

    // include("cliente-class.php");
    $Vendedora1 = new Vendedora();
    $Vendedora1->nome = "Maria";
    $Vendedora1->telefone = 11912344321;
    $Vendedora1->email = "bla@gmail.com";

    $Produto1 = new Produto();
    $Produto1->nome = "produto1";
    $Produto1->codigo = 42453;
    $Produto1->preco = 213.00;

    $Produto2 = new Produto();
    $Produto2->nome = "produto2";
    $Produto2->codigo = 4028390;
    $Produto2->preco = 34.00;

    $Venda1 = new Venda();
    $Venda1->valor = 656.00;
    $Venda1->vendedora = $Vendedora1;
    $Venda1->data = "teste data";
    $Venda1->tipo = "Cheque";


    // echo "<br/>Nome da vendedora : ".$Vendedora->nome;
    // echo "<br/>Email da vendedora : ".$Vendedora->email;
?>
</html>
