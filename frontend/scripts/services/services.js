'use strict';

angular.module('sysMural')
	.factory('personaResource', function($resource){
		return $resource("http://quejascore.xyz/api/v0.1/persona/:id",{id:"@id"});
	})
	.factory('postResource', function($resource){
		return $resource("http://quejascore.xyz/api/v0.1/post/:id",{id:"@id"} );
	});