<div class="caixa">
				<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Meus Cursos</span> Lista de Cursos</h2>
			</div>
		<div class="base-home">
			<div class="rows cursos py-3">
                        <?php foreach($lista_cursos as $curso) { ?>
                                <div class="col-3">
                                        <div class="caixa">
                                                <img src="<?php echo URL_BASE . "assets/img/". $curso["imagem"] ?>">
                                                <div class="del-curso">
                                                        <p><?php echo $curso->curso ?></p>
                                                        <small>Desempenho <b><?php echo number_format(($curso->qtde_assistida / $curso->qtde_aula) * 100,2) ?>%</b></small>
                                                        <progress value="<?php $curso->qtde_assistida?>" max="<?php $curso->qtde_aula?>"></progress>
                                                        <a href="<?php echo URL_BASE . "curso/detalhe/" . $curso->id_curso  ?>" class="btn">Ir para o curso</a>
                                                </div>
                                        </div>
                                </div>
                        <?php } ?>
                
        </div>
</div>
                    
		
</div>