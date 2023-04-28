<?php


class Ahorcado{

    public $palabra;
    public $abecedario;

    public function __construct(){

        $this->palabra = $this->generaPalabra();
        $this->abecedario = explode(",","a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z");
        
        
    }

    private function generaPalabra(){
        require("conexion.php");
        $conexion = Conectar::conexion();
        $aleatorio = rand(1,340);
        $sql = "SELECT * FROM palabras WHERE COD_PALABRA = $aleatorio";
        $stmt = $conexion->query($sql);

        $registro = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $palabra = strtoupper($registro["PALABRA"]);

    }


}


?>