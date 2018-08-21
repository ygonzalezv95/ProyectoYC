<?php

    class Registrarse extends Controller{

        public function __construct(){

        }

        //Para mostrar las vistas
        public function registrarUsuario(){

            $this->vista('inc/header');
            $this->vista('pag/form_registrarse');  
            $this->vista('inc/footer');          

        }  
        
        public function insertarUsuario(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $datos = [
                'idUsuario'=>trim($_POST['txtIdUsuario']),   
                'docUsuario'=>trim($_POST['txtDocUsuario']),
                'nombre'=>trim($_POST['txtNombre']),
                'apellido'=>trim($_POST['txtApellido']),
                'fechaNacimiento'=>trim($_POST['txtFechaNacimiento']),
                'correo'=>trim($_POST['txtCorreo']),
                'ciudadResidencia'=>trim($_POST['txtCiudadResidencia']),
                'telefono'=>trim($_POST['txtTelefono']),
                'correo'=>trim($_POST['txtCorreo']),
                'contrasena'=>trim($_POST['txtContrasena'])
            ];

                if($this->RegistrarseUsuario->insertarUsuario($datos)){
                    redireccionar('/paginas/form_registrarse');
                }
                else{
                    die('Algo salió mal');
               }
             /**}
            else{
                $datos = [
                'documentoPaciente' => '',
                'nombre' => '',
                'apellido' => '',
                'fechaNacimiento' => '',
                'genero' => '',
                'correo' => '',
                'direccion' => '',
                'telefono' => '',
                'celular' => '',
                'nombreEmpresa' => ''
                ];

                $this->vista('paginas/insertarP', $datos);
            }
            
        }

        public function actualizarP($idPaciente){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $datos = [
                'idPaciente'=> $idPaciente,
                'documentoPaciente'=>trim($_POST['txtDocumentoPaciente']),
                'nombre'=>trim($_POST['txtNombre']),
                'apellido'=>trim($_POST['txtApellido']),
                'fechaNacimiento'=>trim($_POST['txtFechaNacimiento']),
                'genero'=>trim($_POST['txtGenero']),
                'correo'=>trim($_POST['txtCorreo']),
                'direccion'=>trim($_POST['txtDireccion']),
                'telefono'=>trim($_POST['txtTelefono']),
                'celular'=>trim($_POST['txtCelular']),
                'nombreEmpresa'=>trim($_POST['txtNombreEmpresa'])
                ];

                if($this->pacienteModelo->actualizarPaciente($datos)){
                    redireccionar('paginas/listarP');
                }
                else{
                    die('Algo salió mal');
                }
            }
            else{
                //obtener informacion del pacientes desde el modelo (BD)

                $paciente = $this->pacienteModelo->obtenerPaciente($idPaciente);

                $datos = [
                'idPaciente' => $paciente->idPaciente,
                'documentoPaciente' => $paciente->documentoPaciente,
                'nombre' => $paciente->nombre,
                'apellido' => $paciente->apellido,
                'fechaNacimiento' => $paciente->fechaNacimiento,
                'genero' => $paciente->genero,
                'correo' => $paciente->correo,
                'direccion' => $paciente->direccion,
                'telefono' => $paciente->telefono,
                'celular' => $paciente->celular,
                'nombreEmpresa' => $paciente->nombreEmpresa
                ];

                $this->vista('paginas/actualizarP', $datos);
            }
        }

        public function eliminarP($id){
            //obtener informacion del usuario desde el modelo

            $paciente = $this->pacienteModelo->obtenerPaciente($id);

            $datos = [
                'idPaciente' => $paciente->idPaciente
                ];

            $datos = [
                'idPaciente' => $id
            ];

            if($this->pacienteModelo->eliminarPaciente($datos)){
                redireccionar('paginas/insertarP');
            }
            else{
                die('Algo salió mal');
            }
        }

        public function listarP(){

            $pacientes = $this->pacienteModelo->obtenerPacientes();
            $datos = [
                'pacientes' => $pacientes
            ];
            $this->vista('paginas/listarP', $datos);
        }

        public function buscarP(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $dato = [
                    'documentoPaciente'=>trim($_POST['txtDocumentoPaciente'])
                ];

                if($paciente = $this->pacienteModelo->obtenerPacAte($dato)){

                    $datos = [
                        'pacienteB' => $paciente
                    ];

                    $this->vista('paginas/buscarP', $datos);

                }
                else{
                    die('Algo salió mal');
                }
            }else{

                $dato = [
                'documentoPaciente' => ''
            ];

            redireccionar('Paginas');

            }    */        
        }

    }
}