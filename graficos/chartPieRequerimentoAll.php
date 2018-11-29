<!--main content start-->
<section id="main-content">
   <section class="wrapper">
   	<div class="row">
	<div class="col-sm-12">
		<form class="form-inline" >
			<div class="form-group" style="margin-top: 15px">
				 <label class="control-label" for="inputSuccess">Tipo Requerimento: </label>
                <select class="form-control m-bot15 tipoRequerimento" id="tipo_requerimento" name="tipoRequerimento">
                    <option selected>Escolha o requerimento</option>
                </select>
       		 	<label for="email">Grupo:</label>
				<select class="form-control m-bot15 grupoRequerimento" id="grupo_requerimento" name="grupoRequerimento">
                	<option selected>Escolha o Grupo Requerimento</option>
            	</select>
       		</div>
		</form>
	</div>
	</div>
   	<div class="row">
			<div class="col-sm-12">
				<form class="form-inline" >
					<div class="form-group">
						<label for="email">Data:</label>
						<input type="text" class="form-control dataInicio" id="dataInicio" >
					</div>
					<div class="form-group">
						<label for="pwd">até:</label>
						<input type="text" class="form-control dataFim" id="dataFim">
					</div>
					<button type="button" class="btn btn-info btnGraficoRequerimentoAll">Consultar</button>
				</form>
			</div>
		</div>
     <div class="row">
      <div class="col-sm-12">
        <div id="chartPieRequerimentoAll" ></div>
      </div>
     </div>
  </section>
</section>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


