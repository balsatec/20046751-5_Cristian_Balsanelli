$(document).ready(function(){

	var topo = 134;
	var rodape = 60;
	var tela = $(document).height();
	var total = topo + rodape + 6;
	var totalPagina =  tela - total+"px";
	$(".conteudoPaginas,.detalheProduto").css('min-height',totalPagina);

});