'use strict';
angular.module('sysMural')
	.controller('indexQuejasCtrl', function($scope,postResource,$location){
		$scope.titulo="PAGINA DE QUEJAS";
		$scope.Comments=postResource.query();
		
	})
	.controller('createPostCtrl', function($scope,postResource){
		
		$scope.lblTitulo="Anotar Queja";
		$scope.btnGuardar="Mandar";
		$scope.Post={};
		$scope.guardarPost=function(){
			$scope.Post.id_persona = 2;	
			$scope.Post.descripcion="";
			//console.log($scope.Post);
			postResource.save($scope.Post);
		};
	})
	.controller('createPersonaCtrl', function($scope,personaResource){
		$scope.btnFormCreate="Guardar";
		$scope.FormTitle="Formulario de registro";
		$scope.Persona={};
		$scope.crearPersona=function(){
			console.log($scope.Persona);
			//personaResource.save($scope.Persona);
		};
	});