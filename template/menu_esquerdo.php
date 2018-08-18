<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->           
         <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
                <?php  if($_SESSION['nivel_id'] == 1){ ?>
                 <a href="?p=chamadosFinalizados">
                    <i class="fa fa-dashboard"></i>
                    <span>Chamados Finalizados</span>
                </a>
                <?php } ?>
                <?php  if($_SESSION['nivel_id'] == 1){ ?>
                 <a href="index.php?p=graficosChamados">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gráficos Chamados</span>
                </a>
                <a href="index.php?p=graficosRequerimento">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gráficos Tipo Requerimento</span>
                </a>
                <?php } ?>
              <!--  <a href="index.php?p=graficosArea">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gráficos Chamado Curso</span>
                </a> -->
            </li>
            <?php  if($_SESSION['nivel_id'] == 4){ ?>
            
            <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-tasks"></i>
                        <span>Cadastros Chamado</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="index.php?p=cadTipoCurso">Tipo Curso</a></li>
                        <li><a href="index.php?p=cadCurso">Curso</a></li>
                        <li><a href="index.php?p=cadUnidade">Unidade</a></li>
                        <li><a href="index.php?p=cadTipoRequerimento">Tipo Requerimento</a></li>
                        <li><a href="index.php?p=cadGrupoRequerimento">Grupo Requerimento</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->