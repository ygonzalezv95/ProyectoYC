    <center><h1> REGISTRO </h1></center>
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">        
          <a class="navbar-brand" href="index.php"><img src="img/logo1.png"><span></span></a>          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  </header>
        
<body>
<form class="form-horizontal">
<fieldset>



<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="textinput" name="nombre" type="text" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Apellido">Apellido</label>  
  <div class="col-md-4">
  <input id="Apellido" name="apellido" type="text" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Tipo de documento</label>
  <div class="col-md-4">
    <select id="selectbasic" name="tipo" class="form-control">
      <option value="1">CC</option>
      <option value="2">TI</option>
      <option value="3">NIT</option>
      <option value="4">OTRO</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Numero de documento</label>  
  <div class="col-md-4">
  <input id="textinput" name="numero" type="text" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Correo electronico</label>  
  <div class="col-md-4">
  <input id="textinput" name="correo" type="text" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Contrasena</label>
  <div class="col-md-4">
    <input id="passwordinput" name="contrasena" type="password" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de nacimiento</label>  
  <div class="col-md-4">
  <input id="textinput" name="fecha" type="text" placeholder="11/11/2011" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Entrenador</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="entrenador" id="radios-0" value="SI" checked="checked">
      SI
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="NO">
      NO
    </label>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Lugar donde vive</label>  
  <div class="col-md-4">
  <input id="textinput" name="lugar" type="text" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tel/Cel</label>  
  <div class="col-md-4">
  <input id="textinput" name="tel" type="text" placeholder="xxxxx" class="form-control input-md">
    
  </div>
</div>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">

    <a type="button"  class="btn btn-primary" href="formulario.php"> REGISTRARSE</a>
    <a type="button"  class="btn btn-primary" href="index.php"> CANCELAR</a>    
  </div>
</div>
<div class="form-group">
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="entrenador" id="radios-0" value="SI" checked="checked">
      Leer terminos y condiciones
    </label> 
  </div>
</fieldset>
</form>

</body>
</html>
