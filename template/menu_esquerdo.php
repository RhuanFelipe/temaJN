<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->           
         <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
                <?php  if($_SESSION['nivel_id'] == 1){ ?>
                 <a href="?p=chamadosFinalizados">
                <i class="fa fa-paste"></i>
                    <span>Chamados Finalizados</span>
                </a>
                <?php } ?>
            <?php  if($_SESSION['nivel_id'] == 1){ ?>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Gráficos do Curso</span>
                        <span class="dcjq-icon"></span></a>
                        <ul class="sub" style="display: none;">
                            <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Todos os Chamados</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieCurso">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarCurso">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutCurso">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnCurso">Coluna</a></li>
                                </ul>
                            </li>
                             <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Tipo Requerimento</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieTipoRequerimentoCurso">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarTipoRequerimentoCurso">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutTipoRequerimentoCurso">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnTipoRequerimentoCurso">Coluna</a></li>
                                </ul>
                            </li>
                            
                       </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Gráficos Gerais</span>
                        <span class="dcjq-icon"></span></a>
                        <ul class="sub" style="display: none;">
                           <li class="sub-menu dcjq-parent-li">
                            <a href="javascript:;" class="dcjq-parent">
                                <i class="fas fa-chart-pie"></i>
                                <span>Todos os Chamados</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieAll">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarAll">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutAll">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnAll">Coluna</a></li>
                                </ul>
                            </li>
                             <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Todos os Curso</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieCursoAll">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarCursoAll">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutCursoAll">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnCursoAll">Coluna</a></li>
                                </ul>
                             </li>
                             <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Tipos curso</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieTipoCursoAll">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarTipoCursoAll">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutTipoCursoAll">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnTipoCursoAll">Coluna</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Tipos Requerimento</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieTipoRequerimentoAll">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarTipoRequerimentoAll">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutTipoRequerimentoAll">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnTipoRequerimentoAll">Coluna</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Grupo Requerimentos</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieGrupoRequerimentoAll">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarGrupoRequerimentoAll">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutGrupoRequerimentoAll">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnGrupoRequerimentoAll">Coluna</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu dcjq-parent-li">
                                <a href="javascript:;" class="dcjq-parent">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Requerimentos</span>
                                <span class="dcjq-icon"></span></a>
                                <ul class="sub" style="display: none;">
                                    <li><a href="index.php?p=chartPieRequerimentoAll">Pizza</a></li>
                                    <li><a href="index.php?p=chartBarRequerimentoAll">Bar</a></li>
                                    <li><a href="index.php?p=chartDonutRequerimentoAll">Donut</a></li>
                                    <li><a href="index.php?p=chartColumnRequerimentoAll">Coluna</a></li>
                                </ul>
                            </li>
                       </ul>
                </li>
             
            
            <!--
            <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fas fa-chart-pie"></i>
                        <span>Gráficos do Curso</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="index.php?p=chartPieCurso">Pizza</a></li>
                        <li><a href="index.php?p=chartBarCurso">Bar</a></li>
                        <li><a href="index.php?p=chartDonutCurso">Donut</a></li>
                        <li><a href="index.php?p=chartColumnCurso">Coluna</a></li>
                    </ul>
                </li>
               
                
                 
                
                 -->
                 
            <?php } ?>
              <!--  <a href="index.php?p=graficosArea">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gráficos Chamado Curso</span>
                </a> -->
            </li>
            <?php  if($_SESSION['nivel_id'] == 4){ ?>
            
               <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fas fa-chart-pie"></i>
                        <span>Cadastros de Chamado</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="index.php?p=cadTipoCurso">Tipo Curso</a></li>
                        <li><a href="index.php?p=cadCurso">Curso</a></li>
                        <li><a href="index.php?p=cadUnidade">Unidade</a></li>
                        <li><a href="index.php?p=cadTipoRequerimento">Tipo Requerimento</a></li>
                        <li><a href="index.php?p=cadGrupoRequerimento">Grupo Requerimento</a></li>
                        <li><a href="index.php?p=cadRequerimento">Requerimento</a></li>
                    </ul>
                </li>
                 <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-group"></i>
                        <span>Cadastros de Pessoas</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="index.php?p=cadAtendente">Atendente</a></li>
                        <li><a href="index.php?p=cadCoordenador">Coordenador</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->