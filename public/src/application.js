$(document).ready(function(){
	window.App = {
		Models: {},
		Views: {},
		Collections: {},
		Routers: {},
		Config: {}
	}

	window.template = function(id){
		return _.template( $('#' + id).html() );		
	}

	App.Routers.Whitesugar = Backbone.Router.extend({
		routes: {
			'' : 'showIndex',
			'dashboard' : 'showIndex'
		},

		showIndex: function(){
			$("#content").html("<h2>Welcome to WhiteSugar!</h2>").hide().fadeIn(500);
		}

	});

	new App.Routers.Whitesugar;

	App.Config.BaseURL = "";

});