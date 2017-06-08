<?php
    namespace Contacts;

    class ContactComandee 
    {
        private $name;
        private $local;
        private $cellphone;
        private $dir;

        function __construct($name, $local, $cellphone, $dir)
        {
            $this->setName($name);
            $this->setLocal($local);
            $this->setCellphone($cellphone);
            $this->setDir($dir);
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function setLocal($local)
        {
            $this->local = $local;            
        }

        function setCellphone($cellphone)
        {
            $this->cellphone = $cellphone;
        }

        function setDir ($dir)
        {
            $this->dir = $dir;
        }

        function getContact()
        {
            echo 'Nombre: ' . $this->name . ' Telefono: ' . $this->local . ' Celular: ' . $this->celular . ' Direccion: ' . $this->dir;
        }
    
    }