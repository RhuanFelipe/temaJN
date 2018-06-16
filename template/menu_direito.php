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
            
        </ul>
    </div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->