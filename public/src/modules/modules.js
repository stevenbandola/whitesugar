$(document).ready(function(){

	App.Models.Module = Backbone.Model.extend({
		defaults: {
			title: '',
			keyword: '',
			active: 1
		}
	});

	App.Collections.Modules = Backbone.Collection.extend({
		model: App.Models.Module
	});

	App.Views.Modules = Backbone.View.extend({

		template: template("modulesTemplate"),

		render: function(){
			this.$el.append(this.template(this.model));
			this.collection.each(this.addOne, this);

			this.$el.find(".datatable").dataTable({
				"sPaginationType": "full_numbers"
			});

			this.$el.clickify();
			
			return this;
		},

		addOne: function(module){
			var moduleView = new App.Views.Module({ model: module });
			this.$el.find("#modulesTable").append(moduleView.render().el);
		}
	});

	App.Views.Module = Backbone.View.extend({
		defaults:{
			title: "a module",
			keyword: "a keyword"
		},

		tagName: 'tr',

		template: template('moduleTemplate'),

		events:{
			'click .moduleTitle' : 'showAlert'
		},

		showAlert: function(){
			console.log(this.$el.find('.moduleTitle').html());
		},

		render: function() {
			this.$el.html( this.template(this.model.toJSON()) );
			return this;
		}
	});

	var modulesCollection = new App.Collections.Modules([
	{
		id: 1,
		title: 'Users',
		keyword: 'Users'
	},
	{
		id: 2,
		title: 'Pages',
		keyword: 'Pages'
	}
	]);

	App.Routers.Module = Backbone.Router.extend({

		routes: {
			'modules': 'showModules',
			'module/:id' : 'showModule'
		},

		showModules: function(){
			
			var modulesView = new App.Views.Modules({ collection: modulesCollection });
			$("#content").html(modulesView.render().el).hide().fadeIn(500);

		},

		showModule: function(id){
			console.log("module #" + id);
			
		}

	});

	new App.Routers.Module;
	Backbone.history.start({ pushState: true });
	$(document.body).clickify(); // Add click handlers to all internal links

});