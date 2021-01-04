<div class="caixa">
				<h2 class="titulo"><span class="case"><i class="ico curso"></i>Formação Front-end</span> Módulo 01 <i class="seta"></i> Capitulo 01 <i class="seta"></i> Aula 01</h2>
			</div>
			<div class="base-home">
			<div class="rows base-cursos ver_videos py-3">
				<div class="col-9 d-flex">
						<div class="caixa">
							<span class="titulo2"><?php echo $aula_atual->aula ?></span>
							<div class="caixa-video">
								<div class="caixa-embed">
									<iframe src="https://www.youtube.com/embed/<?php echo $aula_atual->embed_youtube ?>" class="embed-item" width="655" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
								<div class="controles">
									<?php if($anterior) { ?>
										<a href="<?php echo URL_BASE . "aula/assistir/" . $anterior->id_aula ?>" class="btn anterior">Anterior</a>
									<?php } ?>
									<?php if($proximo) { ?>
										<a href="<?php echo URL_BASE . "aula/assistir/" . $proximo->id_aula ?>" class="btn proximo">Próximo</a>  
									<?php } ?>
								</div>
							</div>
						</div>
							
				</div>
				<div class="col-3 d-flex">	
					<div class="caixa">					
					<div class="menu-sidebar">		
						<span class="titulo2">Lista de aulas</span>
						<div class="scroll-lista">
							<ul>				
								<?php 
									foreach($aulas as $aula) { 
										$assistido = ($aula->assistido) ? "marcado" : "naomarcado" 
								?>
										
									<li class="<?php echo $assistido ?>">
										<a href="<?php echo URL_BASE . "aula/assistir/" . $aula->id_aula ?>">
											<?php echo $aula->aula ?>	
										</a>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>	
					</div>	
				</div>
			</div>
			<div class="rows base-cursos ver_videos pb-3">
				<div class="col-9 mb-3">
					<?php if($downloads){ ?>
						<div class="v-downloads">
						<div class="caixa">
							<span class="titulo2">ARQUIVOS DISPONÍVEÍS PARA DOWNLOADS</span>						
								<ul>
									<?php foreach($downloads as $download) {?>
										<li><a href="<?php echo URL_BASE . "download/" . $download->path ?>	" class="icon" target="_blank"><?php echo $download->titulo_download ?></a></li>	
									<?php } ?>
								</ul>
						</div>
						</div>
					<?php } ?>

					<?php if($comentarios) {?>
						<div class="rows duvidas py-3 pb-0">
								<div class="cols-12">
									<div class="caixa">
										<h2 class="titulo2">
											Lista de Comentários
										</h2>
										<ul>
											<?php foreach($comentarios as $c) { ?>
												<li>
													<img src="<?php echo URL_BASE ?>assets/img/ico-comentarios.png" alt="imagem">
													<span class="titulo">Dúvida: <?php echo $c->comentario->comentario ?>.</span>
													<div class="d-flex text-space-between">
														<a href="#responder" onclick="responder(<?php echo $c->comentario->id_comentario ?>)" rel="modal" class="btn btn-verde d-table btn-pequeno">Responder</a>
													</div>
													<?php foreach($c->respostas as $resposta){ ?>
														<div class="resposta">
															<span class="titulo">Resposta <small>Data: <?php echo $resposta->data_resposta?></small></span>
															<p><?php echo $resposta->resposta ?></p>

														</div>
													<?php } ?>
												</li>
											<?php } ?>
										</ul>

									</div>
								</div>
						</div>
					<?php } ?>

					<form action="<?php echo URL_BASE . "comentario/inserir"?>" method="post">
						<div class="base-comentario">
							<div class="caixa">	
								<span class="titulo2">Comentários </span>					

								<textarea name="comentario" rows="10" placeholder="Deixe seu comentrio"></textarea>	
								<input type="hidden" name="id_aula" value="<?php echo $aula_atual->id_aula?>">
								<input type="hidden" name="id_curso" value="<?php echo $aula_atual->id_curso?>">
								<input type="submit" name="" value="Inserir Comentário" class="btn">
												
							</div>
						</div>
					</form>
				</div>
				<div class="col-3">	
					<div class="v-desempenho">						
					<div class="caixa">	
						<span class="titulo2">Seus acessos no curso</span>					
						<ul>
							<li>
								<i class="ico acesso"></i>
								<span class="tt1">ÚLTIMO CESSO</span>
								<span class="tt2">20/06/17</span>
							</li>
							<li>
								<i class="ico horas"></i>
								<span class="tt1">Duração</span>
								<span class="tt2">05h00min  </span>
							</li>
							<li>
								<i class="ico aula"></i>
								<span class="tt1">Total de Aulas</span>
								<span class="tt2">27 aulas </span>
							</li>
							
							<li>
								<i class="ico aula-ass"></i>
								<span class="tt1">Aulas assistidas</span>
								<span class="tt2">27 aulas </span>
							</li>
							
							
						</ul>
				</div>
				</div>
				
				</div>
			</div>				
			</div>
//MODAL============================================================
			<div class="window sm-modal" id="responder">
					<a href="" class="fechar">X</a>
					<form action="<?php echo URL_BASE."resposta/inserir"?> method="post" name="resposta">
						<div class="base-comentario mt-0">
							<div class="caixa">
								<span class="titulo2">Responder uma Pergunta</span> 
								<textarea rows="10" name="resposta" placeholder="Deixe sua resposta"></textarea>
								<input type="hidden" name="id_comentario" id="id_comentario" value="<?php echo $aula_atual->id_aula?>">
								<input type="hidden" name="id_aula" value="<?php echo $aula_atual->id_aula?>">
								<input type="submit" name="" value="Enviar resposta" class="btn">
							</div>
						</div>
					</form>
				</div>
			<div id="mascara"></div>

<script>
	function responder(id_comentario){
		$("id_comentario").val(id_comentario);
	}
</script>
			