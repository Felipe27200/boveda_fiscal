<?php
class EmpresaDto
{
    private $nit;
    private $razonSocial;
    private $direccion;
    private $nombreRepresentante;
    private $telefono;
    private $correo;
    private $sitioWeb = "";
    private $contrasenia;

    public function getContrasenia()
    {
        return $this->contrasenia;
    }

    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
    }

    public function getSitioWeb()
    {
        return $this->sitioWeb;
    }

    public function setSitioWeb($sitioWeb)
    {
        $this->sitioWeb = $sitioWeb;
    }

    public function getNit()
    {
        return $this->nit;
    }

    public function setNit($nit)
    {
        $this->nit = $nit;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getNombreRepresentante()
    {
        return $this->nombreRepresentante;
    }

    public function setNombreRepresentante($nombreRepresentante)
    {
        $this->nombreRepresentante = $nombreRepresentante;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
}
?>