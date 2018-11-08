<?php
  $encoding = 'UTF-8';
  $nivel = $usuario->getNivel();
  $id = $_SESSION['usuario_id'];
  if($usuario->getNome() == null)
    $usuario = "ADMINISTRADOR";
  else
    $usuario = mb_convert_case($usuario->getNome(), MB_CASE_UPPER, $encoding);

 

?>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle icon-user" href="#">
                <!--<img alt="" src="images/avatar1_small.jpg">-->
                <i class="fa fa-user"></i>
                <span class="username"><?php echo $usuario; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="?p=formProfile&nivel=<?php echo $nivel;?>&id=<?php echo $id;?>"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Configurações</a></li>
                <li><a href="#" class="btn-deslogar"><i class="fa fa-key"></i> Sair</a></li>
            </ul>
        </li>
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
