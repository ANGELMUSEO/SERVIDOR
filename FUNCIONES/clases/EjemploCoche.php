<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Coche{
        private $marca;
        private $modelo;
        private $color;
        private $pinturaMetalizada;
        private $matricula;
        private $anioFabricacion;

        public function __construct($matri)
        {
            $this->matricula=$matri;
            $this->marca="Seat";
            $this->modelo="";
            $this->color="Negro";
            $this->pinturaMetalizada=false;
            $this->anioFabricacion=2024;
        }

        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function getColor(){
            return $this->color;
        }

       

        public function getAnioFabricacion(){
            return $this->anioFabricacion;
        }

        public function setMatricula($matri){
                $this->matricula=$matri;
        }

        public function setMarca($mar){
            $this->marca=$mar;
        }

        public function setModelo($mod){
            $this->modelo=$mod;
        }

        public function setColor($col){
            $this->color=$col;
        }

        public function getPinturaMetalizada(){
            return $this->pinturaMetalizada;
        }
        public function setPinturaMetalizada($booleMeta){
                $this->pinturaMetalizada=$booleMeta;
        }
        public function imprimeCoche(){
            echo "Tiene un coche marca ".$this->marca." modelos: ".$this->modelo." de color ".$this->color;
        }

        public function __toString()
        {
            return "<br>MATRICULA: ".$this->matricula."<br>MARCA: ".$this->marca."<br>MODELO: ".$this->modelo 
            ."<br>COLOR: ".$this->color."<br> METALIZA: ".$this->pinturaMetalizada."<br> AÑO: ".$this->anioFabricacion;

        }


    }


class EmpresaPepitoPerez{

    public static function main(){
      $cocheEmpresaJefe=new Coche("0000BBB");
      $cocheEmpresaVenta=new Coche("5555KKK");
      $cocheEmpresaVenta->setMarca("SEAT");
      $cocheEmpresaVenta->setModelo("PANDA");
      $cocheEmpresaVenta->setColor("ROJO");

      $cocheEmpresaVenta->imprimeCoche();

      echo "<br><br>LA MATRICULA DEL COCHE DEL JEFE ES ".$cocheEmpresaJefe->getMatricula();
      echo "<br><br>LA MATRICULA DEL COCHE DE VENTAS ES ".$cocheEmpresaVenta->getMatricula();

      /*

      operaciones coche jefe:n
      -Cambiar el color del coche del jefe a negro y con pintura metalizada.
      --Y mostrar todo si la pintura es metalizada y solo color y matricula si no es metalizada
      
      */

      $cocheEmpresaJefe->setColor("negro");
      $cocheEmpresaJefe->setPinturaMetalizada(true);
        if($cocheEmpresaJefe->getPinturaMetalizada()){
            echo $cocheEmpresaJefe;
        }else{
            echo "El color del coche es ".$cocheEmpresaJefe->getColor()."y la matricula es "
            .$cocheEmpresaJefe->getMatricula();
        }




      

    }

}

EmpresaPepitoPerez::main();
    ?>
</body>
</html>