<!--main content start-->
<section id="main-content">
   <section class="wrapper">
   	<div class="row">
			<div class="col-sm-12">
				<form class="form-inline" >
					<div class="form-group" style="margin-top: 15px">
						<label for="email">Tipo Requerimento:</label>
						<select class="form-control m-bot15 tipo_requerimento" id="tipo_requerimento" name="tipo_requerimento">
	                 		<option selected>Informe o tipo curso</option>
	           		 	</select>
	           		</div>
					<div class="form-group">
						<label for="email">Data:</label>
						<input type="text" class="form-control dataInicio" id="dataInicio" >
					</div>
					<div class="form-group">
						<label for="pwd">até:</label>
						<input type="text" class="form-control dataFim" id="dataFim">
					</div>
					<button type="button" class="btn btn-info btnGraficoGrupoRequerimentoCurso">Consultar</button>
				</form>
			</div>
		</div>
     <div class="row">
      <div class="col-sm-12">
        <div id="chartPieGrupoRequerimentoCurso" ></div>
      </div>
     </div>
  </section>
</section>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


