/*global Ember */
this.App = Ember.Application.create();

App.Store = DS.Store.extend({
	revision: 12,
	adapter: DS.RESTAdapter.create({
		url: 'http://hidden-woodland-4634.herokuapp.com/api/v1'
	})
});

App.Student = DS.Model.extend({
	user_id: DS.attr('number'),
	fullname: DS.attr('string')
});

App.Router.map(function(){
	this.route('home');
	this.route('inbox');
	this.route('editUsers');
	this.route('changePass');
	this.resource('student', {path: '/student/all/'});
});

App.ApplicationRoute = Ember.Route.extend({
	model: function() {
		return App.Student.find();
	}
});