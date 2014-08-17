<a href="/usuarios/login/">Login</a><br><br>
<form role="form" method="post">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?=set_value('nombre')?>" autofocus>
    <?php echo form_error('nombre'); ?>
  </div>
  <div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?=set_value('apellido')?>">
    <?php echo form_error('apellido'); ?>
  </div>
  <div class="form-group">
    <label>Tipo DNI</label>
    <select name="tipo_dni" class="form-control">
        <?php foreach($tipos_dni as $tipo_dni) { ?>
        <option value="<?=$tipo_dni['idtipo_dni']?>"><?=$tipo_dni['tipo_dni']?></option>
        <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label>Numero DNI</label>
    <input type="text" class="form-control" name="numero_dni" placeholder="Numero DNI" value="<?=set_value('numero_dni')?>">
    <?php echo form_error('numero_dni'); ?>
    <?php if(isset($numero_dni)) echo $numero_dni; ?>
  </div>  
  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?=set_value('direccion')?>">
    <?php echo form_error('direccion'); ?>
  </div>
  <div class="form-group">
    <label>Ciudad</label>
    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="<?=set_value('ciudad')?>">
    <?php echo form_error('ciudad'); ?>
  </div>
  <div class="form-group">
    <label>Codigo Postal</label>
    <input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal" value="<?=set_value('codigo_postal')?>">
    <?php echo form_error('codigo_postal'); ?>
  </div>  
  <div class="form-group">
    <label>Provincia</label>
    <input type="text" class="form-control" name="provincia" placeholder="Provincia" value="<?=set_value('provincia')?>">
    <?php echo form_error('provincia'); ?>
  </div>  
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" value="<?=set_value('email')?>">
    <?php echo form_error('email'); ?>
    <?php if(isset($email)) echo $email; ?>
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="tel" class="form-control" name="telefono" placeholder="Telefono" value="<?=set_value('telefono')?>">
    <?php echo form_error('telefono'); ?>
  </div>
  <div class="form-group">
    <label>Usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?=set_value('usuario')?>">
    <?php echo form_error('usuario'); ?>
    <?php if(isset($usuario)) echo $usuario; ?>
  </div>  
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <?php echo form_error('password'); ?>
  </div>  
  <div class="form-group">
    <label>Confirmar Password</label>
    <input type="password" class="form-control" name="passconf" placeholder="Password">
    <?php echo form_error('passconf'); ?>
  </div>  
    <div class="form-group">
        <label><?=$cap['image']?></label>
        <input type="text" name="captcha"><input type="hidden" name="timecaptcha" value="<?=$cap['time']?>">
    </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
