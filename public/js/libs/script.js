$(document).ready(function(){
	$("#agenda").click(function(){
		$("#window").load("./php/default.php?opt=Agenda");
	});
	$("#produtos").click(function(){
		$("#window").load("./php/default.php?opt=Produtos");
	});
	$("#compras").click(function(){
		$("#window").load("./php/default.php?opt=Compras");
	});
	$("#contasPagar").click(function(){
		$("#window").load("./php/default.php?opt=ContasPagar");
	});
	$("#contasReceber").click(function(){
		$("#window").load("./php/default.php?opt=ContasReceber");
	});
	$("#pessoas").click(function(){
		$("#window").load("./php/default.php?opt=Pessoas");
	});
	$("#vendas").click(function(){
		$("#window").load("./php/default.php?opt=Vendas");
	});
});