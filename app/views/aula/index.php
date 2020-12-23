<div class="caixa">
				<h2 class="titulo"><span class="case"><i class="ico curso"></i>Formação Front-end</span> Módulo 01 <i class="seta"></i> Capitulo 01 <i class="seta"></i> Aula 01</h2>
			</div>
			<div class="base-home">
			<div class="rows base-cursos ver_videos py-3">
				<div class="col-9 d-flex">
						<div class="caixa">
							<span class="titulo2"><?php echo $aula_atual['aula'] ?></span>
							<div class="caixa-video">
								<div class="caixa-embed">
									<iframe src="https://www.youtube.com/embed/<?php echo $aula_atual['embed_youtube'] ?>" class="embed-item" width="655" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
								<div class="controles">
									<a href="" class="btn anterior">Anterior</a>
									<a href="" class="btn proximo">Próximo</a>  
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
									
										$assistido = ($aula['assistido']) ? "marcado" : "naomarcado" 
								?>
										
									<li class="<?php echo $assistido ?>">
										<a href="<?php echo URL_BASE . "aula/assistir/" . $aula['id_aula'] ?>">
											<?php echo $aula['aula'] ?>	
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
					<div class="v-downloads">
					<div class="caixa">
						<span class="titulo2">ARQUIVOS DISPONÍVEÍS PARA DOWNLOADS</span>						
							<ul>
								<li><a href="" class="icon" target="_blank">Imagens para desenvolvimento do site</a></li>	
								<li><a href="" class="icon" target="_blank">Imagens para desenvolvimento do site</a></li>		
							</ul>
					</div>
				</div>
				
					<div class="base-comentario">
						<div class="caixa">	
							<span class="titulo2">Comentários </span>					

							<textarea rows="10" placeholder="Deixe seu comentrio"></textarea>	
							<input type="submit" name="" value="Comentário" class="btn">
											
						</div>
					</div>
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