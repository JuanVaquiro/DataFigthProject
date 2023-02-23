<?php

namespace app\usuario;

class Usuario{

    // protected $ciudad;
    protected $nombre;
    protected $apellido;
    protected $tipoDocumento;
    protected $documento;
    protected $sexo;
    protected $email;
    protected $telefono;
    protected $fechaNacimiento;
    protected $usuario;
    protected $deporte;

    public function __construct($nombre, $apellido, $tipoDocumento, $documento, 
    $sexo, $email, $telefono, $fechaNacimiento, $usuario, $deporte){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDocumento = $tipoDocumento;
        $this->documento = $documento;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->usuario = $usuario;
        $this->deporte = $deporte;
        
    }

}