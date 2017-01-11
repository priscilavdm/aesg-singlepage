
		<div class="main-container" id="contato">
			<div class="main wrapper clearfix">
				<article>
					<h1>Fale com a AESG</h1>
					<p>Para entrar em contato com a AESG, por favor, preencha o formulário abaixo. Entraremos em contato com você o mais rápido possível.</p>

					<form id="form-contato" method="post" action="envio.php">
						<ul>
							<li>
								<label for="nome">Nome</label>
								<input type="text" name="nome" id="nome">
							</li>
							<li>
								<label for="email">Email</label>
								<input type="text" name="email" id="email">
							</li>
							<li>
								<label for="assunto">Assunto</label>
								<input type="text" name="assunto" id="assunto">
							</li>
							<li class="right mensagem">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" id="mensagem"></textarea>
							</li>
							<li class="right"><input type="submit" id="enviar" value="Enviar"></li>
						</ul>
					</form>
					<div class="response-msg"><?php echo $_SESSION['msg'];?></div>
				</article>

			</div> <!-- #main -->
		</div> <!-- #main-container -->
