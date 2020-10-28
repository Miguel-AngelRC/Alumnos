<?php

error_reporting(E_ALL);
include_once("AccesoDatos.php");
include_once("Usuario.php");


class materias {
//Sólo define los atributos propios; la clave, el nombre y el pwd los hereda

private $ncvemateria;
private $snombremateria;
private $ncreditos;
private $nht;	
private $nhp;	

   
	function setNcvemateria($pnValor){
       $this->ncvemateria = $pnValor;
	}
   
	function getncvemateria(){
       return $this->ncvemateria;
	}
   
	function setSnombremateria($pnValor){
       $this->snombremateria = $pnValor;
	}
   
	function getSnombremateria(){
       return $this->snombremateria;
	}
   
   function setNcreditos($pnValor){
       $this->ncreditos = $pnValor;
	}
   
	function getNcreditos(){
       return $this->ncreditos;
	}
	
	function setNht($pnValor){
        $this->nht = $pnValor;
     }
    
     function getNht(){
        return $this->nht;
     }

     function setNhp($pnValor){
        $this->nhp = $pnValor;
     }
    
     function getNhp(){
        return $this->nhp;
     }
	
	/*Busca materias de un alumno*/
	function buscarMaterias($idUsuario){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$arrRS=null;
	$arrAlumnos = null;
	$arrLinea=null;
	$j=0;
	$oAlum=null;
		if ($oAccesoDatos->conectar()){
		 	$sQuery = "select ncvemateria,snombremateria,ncreditos,nht,nhp 
                            from alumno join reticula using (ncvecarrera,nsemestre) join materia using (ncvemateria)
                            where scveusuario = '$idUsuario';";

			$arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
			$oAccesoDatos->desconectar();

			
            
        }

		return $arrRS;
	}
 }
 ?>