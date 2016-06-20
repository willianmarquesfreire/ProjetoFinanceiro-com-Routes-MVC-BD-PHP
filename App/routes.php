<?php

$routes = [
    ['get', '/produtos', 'ProdutoController@listar'],
    ['get', '/clientes', 'ClienteController@listar'],
    ['get', '/produtos/excluir', 'ProdutoController@excluir'],
    ['get', '/produtos/cadastrar', 'ProdutoController@cadastrar'],
    ['get', '/login', 'LoginController@entrar'],
    ['get', '/novousuario', 'LoginController@novo'],
    ['get', '/cadastrarusuario', 'LoginController@cadastrar'],
    ['get', '/sair', 'LoginController@sair'],
		
	['get', '/categoria', 'CategoriaController@listar'],
	['get', '/categoria/excluir', 'CategoriaController@excluir'],
	['get', '/categoria/cadastrar', 'CategoriaController@cadastrar'],
	['get', '/categoria/alterar', 'CategoriaController@alterar'],
		
	['get', '/financeiro', 'FinanceiroController@listar'],
	['get', '/financeiro/excluir', 'FinanceiroController@excluir'],
	['get', '/financeiro/cadastrar', 'FinanceiroController@cadastrar'],
	['get', '/financeiro/alterar', 'FinanceiroController@alterar']
];
