<?php var_dump($aulas)?>
		<div class="caixa">
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Curso</span> Curso de Front-end</h2>
		</div>
		
			<div class="base-home">
				<div class="rows base-cursos py-3">
				<div class="col-9">
						<div class="caixa">
							<div class="base-caixa-curso rows">
								<div class="col-4">
									<div class="thumb"><img src="<?php echo URL_BASE . "assets/img/" . $curso['imagem']?>"></div>
								</div>
								<div class="col-8">
									<span class="titulo"><?php echo $curso["curso"] ?></span>
									<ul>
										<li><i class="ico data"></i><small>DATA DE INÍCIO:</small> <span>27/06/2017</span></li>
										<li><i class="ico hora"></i><small>Duração:</small> <span><?php echo $curso["duracao"] ?></span></li>
										<li><i class="ico qtd"></i><small>Quantidade:</small> <span>27 Aulas</span></li>
									</ul>
									<div class="progress">
										<small>Nível de progressão deste curso <b>50%</b></small>
										<progress value="50" max="100"></progress>
									</div>
								</div>	
							</div>
							</div>
							
						
						
						<div class="lista">
						<div class="caixa">
						<span class="titulo2">Lista de aulas</span>
							<table cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th align="left">Titulo</th>
										<th align="left">Duração</th>
										<th align="left">Data</th>
										<th align="left">Assistido</th>
										<th align="left">tipo</th>
									</tr>
								</thead>
								<tbody>						 
									<?php foreach ($aulas as $aula) { ?>
											<tr>
												<td align="left"><a href="<?php echo URL_BASE . 'aula' ?>"><i class="ico ititulo"></i><?php echo $aula["aula"]?></a></td>
												<td align="left"><i class="ico iduracao"></i><?php echo $aula["duracao_aula"]?></td>
												<td align="left"><i class="ico idata"></i>08/01/2018</td>
												<td align="left"><i class="ico iassistido"></i>Sim</td>
												<td align="left"><i class="ico iaula"></i>Aula</td>
											</tr>
									<?php } ?>					 
																
								</tbody>
							</table>
						</div>
						</div>
					</div>
				<!--sidebar-->
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