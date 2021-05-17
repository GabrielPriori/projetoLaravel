 <?php if(session()->has('msg')) { ?>
 <div class="alert alert-sucess" role="alert">
 <?php session('msg')  ?> </div>
 <?php } elseif(session()->has('erromsg')){ ?>
  <div class="alert alert-danger" role="alert">
 <?php session('msg')  ?> </div>
 <?php } ?>
 
 <form class="form-horizontal" role="form" action="<?php url('noticias') ?>" enctype="multipart/form-data">
 <?php csrf_field() ?>
 <?php csrf_field() ?>
  <div class="form-group">
    <label class="col-sm-2 control-label" for="titulo">Titulo</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="titulo" placeholder="Titulo"> </div>
  </div>
  
   <div class="form-group">
    <label class="col-sm-2 control-label" for="descricao">Descrição</label>
    <div class="col-sm-10">
    <textarea type="text" class="form-control" name="descricao"> </textarea></div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-2 control-label" for="imagem">Imagem</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" name="imagem" placeholder="Imagem"></div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-default">Enviar</button>
</div></div>
</form>
