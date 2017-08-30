<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Trabalho Web II</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="{{ URL::to('css/materialize.css') }}" rel='stylesheet'>
		<link href="{{ URL::to('css/style.css') }}" rel='stylesheet'>
				
	</head>
	<body>
<nav class="light-blue lighten-1" role="navigation">
<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Biblioteca</a>
</div>
</nav>
<div class="section">
	<div class="container">
		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header indigo darken-1">Alunos</div>
				<div class="collapsible-body">
				<span>
					<table class='bordered striped centered responsive-table' id='tabelaAlunos'>
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>E-mail</th>
								<th>Telefone</th>
								<th>Endereço</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class='row'>
						<div class='col s12 center-align' style='padding-top:15px;'>
							<a class="btn-floating btn-large waves-effect waves-light green darken-1 modal-trigger" data-target="modalAluno"><i class="material-icons">add</i></a>
						</div>
					</div>
				</span>
				</div>
			</li>
			<li>
				<div class="collapsible-header indigo darken-1">Categorias</div>
				<div class="collapsible-body"><span>
					<table class='bordered striped centered responsive-table' id='tabelaCategorias'>
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class='row'>
						<div class='col s12 center-align' style='padding-top:15px;'>
							<a class="btn-floating btn-large waves-effect waves-light green darken-1 modal-trigger" data-target="modalCategoria"><i class="material-icons">add</i></a>
						</div>
					</div>
					</span>
				</div>
			</li>
			<li>
			<div class="collapsible-header indigo darken-1">Livros</div>
				<div class="collapsible-body"><span>
					<table class='bordered striped centered responsive-table' id='tabelaLivros'>
						<thead>
							<tr>
								<th onclick='mudarLivro(0,4)'>ID<i class="material-icons icone">expand_less</i></th>
								<th>Livro</th>
								<th>Autor</th>
								<th>Editora</th>
								<th onclick='mudarLivro(4,0)'>Categoria<i class="material-icons icone">expand_more</i></th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class='row'>
						<div class='col s12 center-align' style='padding-top:15px;'>
							<a class="btn-floating btn-large waves-effect waves-light green darken-1 modal-trigger" data-target="modalLivro"><i class="material-icons">add</i></a>
						</div>
					</div>
					</span>
				</div>
			</li>
			<li>
			<div class="collapsible-header indigo darken-1">Empréstimos</div>
			<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.

			<div class='row'>
			<div class='col s12 center-align' style='padding-top:15px;'>
			<a class="btn-floating btn-large waves-effect waves-light green darken-1 modal-trigger" data-target="modalEmprestimo"><i class="material-icons">add</i></a>
			</div>
			</div>
			</span></div>
			</li>
		</ul>
	</div>
</div>

	<!-- Modal Structure -->
	<div id="modalAluno" class="modal">
		<div class="modal-content">
			<h4 id='title-aluno'>Cadastrar Aluno</h4>
			<div class="row">
				<form class="col s12" id='formAluno'>
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					<input type="hidden" name="id_aluno" value="0" id="id_aluno">
					<div class="row">
						<div class="input-field col m7 s12">
							<input id="nome_aluno" type="text" class="validate">
							<label for="nome_aluno" data-error="wrong">Nome</label>
						</div>
						<div class="input-field col m5 s12">
							<input id="email" type="email" class="validate">
							<label for="email" data-error="wrong">Email</label>
						</div>
						<div class="input-field col m7 s12">
							<input id="endereco" type="text" class="validate">
							<label for="endereco" data-error="wrong">Endereço</label>
						</div>
						<div class="input-field col m5 s12">
							<input id="telefone" type="text" class="validate">
							<label for="telefone" data-error="wrong">Telefone</label>
						</div>
					</div>
				
			</div>
		</div>
		<div class="modal-footer">
		  <button id='btn-aluno' class="btn waves-effect waves-light green darken-1" type="submit" name="action">Cadastrar
			<i class="material-icons right">send</i>
		  </button></form>
		</div>
	</div>
	
	<div id="modalCategoria" class="modal">
		<div class="modal-content">
			<h4 id='title-categoria'>Cadastrar Categoria</h4>
			<div class="row">
				<form class="col s12" id='formCategoria'>
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					<input type="hidden" name="id_categoria" value="0" id="id_categoria">
					<div class="row">
						<div class="input-field col m7 s12">
							<input id="nome_categoria" type="text" class="validate">
							<label for="nome_categoria" data-error="wrong">Nome</label>
						</div>
					</div>
				
			</div>
		</div>
		<div class="modal-footer">
		  <button id='btn-categoria' class="btn waves-effect waves-light green darken-1" type="submit" name="action">Cadastrar
			<i class="material-icons right">send</i>
		  </button></form>
		</div>
	</div>

	<div id="modalLivro" class="modal">
		<div class="modal-content">
			<h4 id='title-livro'>Cadastrar Livro</h4>
			<div class="row">
				<form class="col s12" id='formLivro'">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					<input type="hidden" name="id_livro" value="0" id="id_livro">
					<div class="row">
						<div class="input-field col m9 s12">
							<input id="nome_livro" type="text" class="validate">
							<label for="nome_livro" data-error="wrong">Livro</label>
						</div>
						
						<div class="input-field col m3 s12">
							<input id="quantidade" type="number" class="validate">
							<label for="quantidade" data-error="wrong">Quantidade</label>
						</div>
						
						<div class="input-field col m6 s12">
							<input id="editora" type="text" class="validate">
							<label for="editora" data-error="wrong">Editora</label>
						</div>
						
						<div class="input-field col m6 s12">
							<input id="autor" type="text" class="validate">
							<label for="autor" data-error="wrong">Autor</label>
						</div>
						
						<div class="input-field col m12 s12">
							<select id='selectCategoria'>
								<option value="" disabled selected>Escolha uma categoria</option>
							</select>
							<label>Categoria</label>
						</div>
					</div>
				
			</div>
		</div>
		<div class="modal-footer">
		  <button id='btn-livro' class="btn waves-effect waves-light green darken-1" type="submit" name="action">Cadastrar
			<i class="material-icons right">send</i>
		  </button></form>
		</div>
	</div>
	
	
	  <div id="modalEmprestimo" class="modal modal-fixed-footer">
		<div class="modal-content">
		  <h4>Cadastro de Emprestimos</h4>
		  
		  <div class='row'>
				
		</div>
		</div>
		<div class="modal-footer">
			<div class='row'>
			<div class='col s12 l8' id='chipLivros'>
			</div>
	
			<div class='col s12 l4'>
				<button class="btn waves-effect waves-light green darken-1" type="submit" name="action">Cadastrar
					<i class="material-icons right">send</i>
				</button>
			</div>
			</div>
	  </div>

	
	
	
	</body>
	
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ URL::to('js/materialize.js') }}" type='text/javascript'></script>
	<script src="{{ URL::to('js/init.js') }}" type='text/javascript'></script>
	<script src="/bower_components/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
	<script src="/bower_components/jquery-file-upload/js/jquery.fileupload.js"></script>
	
	<script>
		var alunos = [];
		var categorias = [];
		var livros = [];
		var emprestimos = [];
		var cesta = [];
		var teste = [];
		
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': "{{ csrf_token() }}"
			}
		});
									
		function livroByCategoria(){
			livros = [];
			limparTabela('#tabelaLivros');
			
			for(i=0; i < categorias.length; i++){
				$.ajax({
					type: "GET",
					url: "/ws/categorias/" + categorias[i].id,
					dataType: "json",
					context: this,
					success: function(data){
						$(data).each(function (){
							livros.push($(this));
							l = '<tr><td>'+ this['id'] +'</td> <td>'+ this['nome'] +'</td> <td>'+ this['autor'] +'</td> <td>'+ this['editora'] +'</td> ';
							l += '<td>'+ this['categoria']['nome'] +'</td> <td>' + '<a class="yellow darken-1 waves-effect waves-light btn" onclick="editar('+ this['id'] + ', 3)"><i class="material-icons">edit</i></a>';
							l +=  '<a class="red darken-1 waves-effect waves-light btn" onclick="alerta('+ this['id'] +', 3)"><i class="material-icons">delete</i></a></td></tr>';
							$('#tabelaLivros tbody').append(l);
						});
					},
					error: function(err){
						console.log("Erro na requisicao");
						console.log(err);
					}
				});
			}
			
		}
	
		function load(tabela){
			$.ajax({
				type: "GET",
				url: "/ws/" + tabela,
				dataType: "json",
				context: this,
				success: function(data){
					if (tabela == "alunos"){
						alunos = data;
						$(data).each(function (){
							a = '<tr><td>'+ this['id'] +'</td> <td>'+ this['nome'] +'</td> <td>'+ this['email'] +'</td> <td>'+ this['telefone'] +'</td> ';
							a += '<td>'+ this['endereco'] +'</td> <td>' + '<a class="yellow darken-1 waves-effect waves-light btn" onclick="editar('+ this['id'] + ', 1)"><i class="material-icons">edit</i></a>';
							a +=  '<a class="red darken-1 waves-effect waves-light btn" onclick="alerta('+ this['id'] +', 1)"><i class="material-icons">delete</i></a></td></tr>';
							$('#tabelaAlunos tbody').append(a);
						});
					} else if (tabela == "categorias"){
						categorias = data;
						$(data).each(function (){
							c = '<tr><td>'+ this['id'] +'</td> <td>'+ this['nome'] + '</td> <td>';
							c += '<a class="yellow darken-1 waves-effect waves-light btn" onclick="editar('+ this['id'] + ', 2)"><i class="material-icons">edit</i></a>';
							c +=  '<a class="red darken-1 waves-effect waves-light btn" onclick="alerta('+ this['id'] +', 2)"><i class="material-icons">delete</i></a></td></tr>';
							$('#tabelaCategorias tbody').append(c);
							
							c = '<option value="'+ this['id'] +'">'+ this['nome'] +'</option>';
							$('#selectCategoria').append(c);
						});
						$('select').material_select();
					} else if (tabela == "livros"){
						livros = data;
						$(data).each(function (i){
							l = '<tr><td>'+ this['id'] +'</td> <td>'+ this['nome'] +'</td> <td>'+ this['autor'] +'</td> <td>'+ this['editora'] +'</td> ';
							l += '<td>'+ this['categoria']['nome'] +'</td> <td>' + '<a class="yellow darken-1 waves-effect waves-light btn" onclick="editar('+ this['id'] + ', 3)"><i class="material-icons">edit</i></a>';
							l +=  '<a class="red darken-1 waves-effect waves-light btn" onclick="alerta('+ this['id'] +', 3)"><i class="material-icons">delete</i></a></td></tr>';
							$('#tabelaLivros tbody').append(l);
							
							l = '<div class="col s12 m6 l4"> <div class="card grey lighten-3 hoverable">';
							l += '<div class="card-content tooltipped" data-position="top" data-delay="50" data-tooltip="'+ this['nome'] +'">';
							l += '<span class="card-title truncate"><b>'+ this['nome'] +'</b></span>';
							l += '<p><b>Autor:</b> '+ this['autor'] +'</p>';
							l += '<p><b>Editora:</b> '+ this['editora'] +'</p>';
							l += '<p><b>Categoria:</b> '+ this['categoria']['nome'] +'</p>';
							l += '<p><b>Quantidade:</b> '+ this['quantidade'] +'</p></div>';
							nome = '"'+this['nome']+'"';
							l += "<a class='white-text' onclick='addChip("+ i +", "+ nome +")'>";
							l += '<div class="card-action center-align green darken-1">ADICIONAR</div>';
							$('#modalEmprestimo .modal-content .row').append(l);
						});
					}
				},
				error: function(err){
					console.log("Erro na requisicao");
					console.log(err);
				}
			});
		}
		
		function limparTabela(tabela){
			$(tabela+' tbody').each( function(){
				$(this).text('');
			});
		}
		
		$(document).ready(function(){
			// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
			$('.modal').modal({
				complete: function (){
					$('input').each( function(){
						$(this).val('');
					});
				}
			});
			$('.tooltipped').tooltip({delay: 50});
			$('.chips').material_chip();
			$('select').material_select();
			load("alunos");
			load("categorias");
			load("livros");
			
			
			$('#formAluno').submit( function(event){
				event.preventDefault();
				$('#modalAluno').modal('close');
				
				if ($('#title-aluno').text() == 'Cadastrar Aluno'){
					aluno = {
						nome: $('#nome_aluno').val(),
						email: $('#email').val(),
						telefone: $('#telefone').val(),
						endereco: $('#endereco').val()
					};
					
					$.ajax({
						type: "POST",
						url: "/ws/alunos",
						dataType: "json",
						context: this,
						data: aluno,
						success: function(data){
							limparTabela('#tabelaAlunos');
							load("alunos");
							Materialize.toast('Aluno cadastrado com sucesso...', 4000);
						},
						error: function(err){
							Materialize.toast('Falha na requisição...', 4000, 'red darken-1')
						}
					});
				} else if ($('#title-aluno').text() == 'Atualizar Dados do Aluno'){
					$('#title-aluno').text('Cadastrar Aluno');
					$('#btn-aluno').html('Cadastrar<i class="material-icons right">send</i>');
					
					aluno = {
						nome: $('#nome_aluno').val(),
						email: $('#email').val(),
						telefone: $('#telefone').val(),
						endereco: $('#endereco').val()
					};
					
					$.ajax({
						type: "PATCH",
						url: "/ws/alunos/" + $('#id_aluno').val(),
						dataType: "json",
						context: this,
						data: aluno,
						success: function(data){
							limparTabela('#tabelaAlunos');
							load("alunos");
							Materialize.toast('Aluno atualizado com sucesso...', 4000);
						},
						error: function(err){
							Materialize.toast('Falha ao atualizar aluno...', 4000, 'red darken-1')
						}
					});
				}
			});
			
			$('#formCategoria').submit( function(event){
				event.preventDefault();
				$('#modalCategoria').modal('close');
				
				if ($('#title-categoria').text() == 'Cadastrar Categoria'){
					categoria = {nome: $('#nome_categoria').val()};
					$.ajax({
						type: "POST",
						url: "/ws/categorias",
						dataType: "json",
						context: this,
						data: categoria,
						success: function(data){
							limparTabela('#tabelaCategorias');
							load("categorias");
							Materialize.toast('Categoria cadastrada com sucesso...', 4000);
						},
						error: function(err){
							Materialize.toast('Falha ao cadastrar categoria...', 4000, 'red darken-1')
						}
					});
				} else if ($('#title-categoria').text() == 'Atualizar Categoria'){
					$('#title-categoria').text('Cadastrar Categoria');
					$('#btn-categoria').html('Cadastrar<i class="material-icons right">send</i>');
					
					categoria = {nome: $('#nome_categoria').val()};
					
					$.ajax({
						type: "PATCH",
						url: "/ws/categorias/" + $('#id_categoria').val(),
						dataType: "json",
						context: this,
						data: categoria,
						success: function(data){
							limparTabela('#tabelaCategorias');
							load("categorias");
							Materialize.toast('Categoria atualizada com sucesso...', 4000);
						},
						error: function(err){
							Materialize.toast('Falha ao atualizar categoria...', 4000, 'red darken-1')
						}
					})
				}
			});
			
			$('#formLivro').submit( function(event){
				event.preventDefault();
				$('#modalLivro').modal('close');
				
				if ($('#title-livro').text() == 'Cadastrar Livro'){
					livro = {
						nome: $('#nome_livro').val(),
						quantidade: $('#quantidade').val(),
						autor: $('#autor').val(),
						editora: $('#editora').val(),
						id_categoria: $('#selectCategoria').val(),
					};
					console.log(livro);
					$.ajax({
						type: "POST",
						url: "/ws/livros",
						dataType: "json",
						context: this,
						data: livro,
						success: function(data){
							limparTabela('#tabelaLivros');
							load("livros");
							Materialize.toast('Livro cadastrado com sucesso...', 4000);
						},
						error: function(err){
							console.log(err);
							$('#modalLivro .modal-content').html(err.responseText);
							$('#modalLivro').modal('open');
							Materialize.toast('Falha ao cadastrar livro...', 4000, 'red darken-1')
						}
					});
				} else if ($('#title-livro').text() == 'Atualizar Livro'){
					$('#title-livro').text('Cadastrar Livro');
					$('#btn-livro').html('Cadastrar<i class="material-icons right">send</i>');
					
					livro = {
						id: $('#id_livro').val(),
						nome: $('#nome_livro').val(),
						quantidade: $('#quantidade').val(),
						autor: $('#autor').val(),
						editora: $('#editora').val(),
						id_categoria: $('#selectCategoria').val()
					};
					
					$.ajax({
						type: "PATCH",
						url: "/ws/livros/" + $('#id_livro').val(),
						dataType: "json",
						context: this,
						data: livro,
						success: function(data){
							limparTabela('#tabelaLivros');
							load("livros");
							Materialize.toast('Livro atualizado com sucesso...', 4000);
						},
						error: function(err){
							Materialize.toast('Falha ao atualizar livro...', 4000, 'red darken-1')
						}
					})
				}
			});
			
		  });
		  
		function editar(id, tabela){
			if (tabela == 1){
				tabela = "alunos";
			} else if (tabela == 2){
				tabela = "categorias";
			} else if (tabela == 3){
				tabela = "livros";
			}
			$.ajax({
				type: "GET",
				url: "/ws/"+ tabela +"/" +id+ "/edit",
				dataType: "json",
				context: this,
				success: function(data){
					if (tabela == "alunos"){
						$('#title-aluno').text('Atualizar Dados do Aluno');
						$('#btn-aluno').html('Salvar<i class="material-icons right">send</i>');
						$('#nome_aluno').val(data.nome);
						$('#id_aluno').val(data.id);
						$('#email').val(data.email);
						$('#telefone').val(data.telefone);
						$('#endereco').val(data.endereco);
						Materialize.updateTextFields();
						$('#modalAluno').modal('open');
					} else if (tabela == "categorias"){
						$('#title-categoria').text('Atualizar Categoria');
						$('#btn-categoria').html('Salvar<i class="material-icons right">send</i>');
						$('#nome_categoria').val(data.nome);
						$('#id_categoria').val(data.id);
						Materialize.updateTextFields();
						$('#modalCategoria').modal('open');
					} else if (tabela == "livros"){
						$('#title-livro').text('Atualizar Livro');
						$('#btn-livro').html('Salvar<i class="material-icons right">send</i>');
						$('#nome_livro').val(data.nome);
						$('#id_livro').val(data.id);
						$('#quantidade').val(data.quantidade);
						$('#autor').val(data.autor);
						$('#editora').val(data.editora);
						$('#selectCategoria').val(data.id_categoria);
						$('select').material_select();
						Materialize.updateTextFields();
						$('#modalLivro').modal('open');
					}
				},
				error: function(err){
					t = tabela.substr(1,(tabela.length - 1)); //remove ultimo caracter
					Materialize.toast('Falha ao atualizar '+ t +'...', 4000, 'red darken-1');
				}
			});
		}
		
		function excluir(id, tabela){
			Materialize.Toast.removeAll();
			if (tabela == 1){
				tabela = "alunos";
			} else if (tabela == 2){
				tabela = "categorias";
			} else if (tabela == 3){
				tabela = "livros";
			}
			$.ajax({
				type: "DELETE",
				url: "/ws/"+ tabela +"/" +id,
				dataType: "json",
				context: this,
				success: function(data){
					tabelaMaius = tabela;
					tabelaMaius = tabela[0].toUpperCase() + tabelaMaius.slice(1); //mudando primeiro caracter para maiusculo
					limparTabela('#tabela'+ tabelaMaius);
					load(tabela);
					tabelaMaius = tabelaMaius.substring(0,(tabelaMaius.length - 1)); //remove ultimo caracter
					Materialize.toast(tabelaMaius + ' excluído com sucesso...', 4000);
				},
				error: function(err){
					t = tabela.substring(0,(tabela.length - 1)); //remove ultimo caracter
					Materialize.toast('Falha ao excluir '+ t +'...', 4000, 'red darken-1');
				}
				
			});
		}
		
		function alerta(id, tabela){
			var $toastContent = $('<span>Realmente deseja excluir?</span>').add($('<button class="btn-flat toast-action" onclick="excluir('+ id +', '+ tabela +')">Confirmar</button>'));
			Materialize.toast($toastContent, 10000, 'red darken-4');
		}
		
		function mudarLivro(j,k){
			x = $('#tabelaLivros thead tr th:eq('+j+')').children('i');
			if (x.text() == 'expand_more'){
				x.text('expand_less');
				$('#tabelaLivros thead tr th:eq('+k+')').children('i').text('expand_more');
				
				if (j == 4){
					livroByCategoria();
					
				} else if (j == 0){
					limparTabela('#tabelaLivros');
					load('livros');
				}
			}
		}
		
		function fechar(n){
			var aux = cesta;
			for (i=0;i<cesta.length;i++){
				if (i != n){
					aux.push(cesta[i]);
				}
			}
		}
		
		function addChip(id, nome){
			cesta.push(livros[id]);
			x = cesta.length - 1;
			novo = '<div class="chip" style="float: left;">'+ nome +'<a onclick="fechar('+ x +')"><i class="close material-icons">close</i></a></div>';
			$('#chipLivros').append(novo);
			
		}
		
	
  
		
		
  </script>
</html>