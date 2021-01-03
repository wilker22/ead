<div class="conteudo">
			<a href="" class="menu-m">menu mobile esquerdo</a><!-- aqui fico icone reponsavel pelo meno da esquerda-->
			<a href="" class="menu-grade">menu mobile direito</a><!--aqui fica o menu responsavel pelo meno do topo-->
			<a href="" class="logo"></a>
			<div id="grade">
			<ul class="menu-topo">
				<li class="sub"><a href=""><i class="ico cursos"></i>Cursos</a>
					<ul>
						<li><a href="">Java</a></li>
						<li><a href="">PHP</a></li>
						<li><a href="">Lógica de programação</a></li>
						<li><a href="">Androind</a></li>
						<li><a href="">Delphi</a></li>
					</ul>
				</li>
				<li class="sub user"><a href="" class="thumb"><img src="<?php echo URL_BASE ?>assets/img/foto01.png"></a>
					<ul>
						<li><b><?php echo $_SESSION[SESSION_LOGIN]->cliente ?></b><small><a href="<?php echo URL_BASE . "login/logoff" ?>">Sair</a></small></li>
					</ul>
				</li>
			</ul>
			</div>
		</div>>