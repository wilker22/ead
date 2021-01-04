<div class="caixa">
				<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Comentários</span> Perguntas e resposta da plataforma</h2>
			</div>
				<div class="rows duvidas py-3">
					<div class="col-12">
						<div class="caixa">
							<ul>
							<?php 
								if($comentarios) {
									foreach($comentarios as $c){
							?>
								<li>
									<img src="<?php echo URL_BASE ?>assets/img/nao-matriculado.png">
									<span class="titulo"><b>Nehuma resposta ainda</b> </span>
									<span class="tt1">Aula: nenhuma</span>
								</li>
								<?php 
									if($c->respostas) {
										foreach($c->respostas as $resposta){
								?>
									<li>
										<img src="<?php echo URL_BASE ?>assets/img/ico-comentarios.png">
										<span class="titulo">Dúvida: <?php echo $c->comentario->comentario ?> </span>
										<span class="tt1">Aula: <?php echo $c->aula?></span>
										<div class="resposta">
											<span class="titulo">Resposta <small>Data:<?php echo $reposta->data_resposta . "|" . $resposta->cliente ?> </small></span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus ante, iaculis sed nulla consequat, interdum posuere arcu. Suspendisse pellentesque, augue vitae cursus cursus, tellus purus hendrerit elit, quis malesuada est nunc ac diam. </p>
										</div>	
									</li> 
								<?php 
									}//endif
										}//endforeach
									}
								}
								?>
								<li>
								<img src="<?php echo URL_BASE ?>assets/img/ico-comentarios.png">
								<span class="titulo">Dúvida: Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>
								<span class="tt1">Aula: aprendendo pensar como programador</span>
								<div class="resposta">
									<span class="titulo">Resposta <small>Data:08/07/2018</small></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus ante, iaculis sed nulla consequat, interdum posuere arcu. Suspendisse pellentesque, augue vitae cursus cursus, tellus purus hendrerit elit, quis malesuada est nunc ac diam. </p>
								</div>
								<div class="resposta">
									<span class="titulo">Resposta <small>Data:08/07/2018</small></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus ante, iaculis sed nulla consequat, interdum posuere arcu. Suspendisse pellentesque, augue vitae cursus cursus, tellus purus hendrerit elit, quis malesuada est nunc ac diam. </p>
								</div>
							</li>
							</ul>
						</div>
					</div>
				
				</div>  