
// jQuery & Bootstrap init
var $ = window.$ = window.jQuery = require('jquery');
var Bootstrap   = require('bootstrap-sass');

// vue.js init
var Vue          = require('vue');
var VueResource  = require('vue-resource');
Vue.use(VueResource);

$(document).ready( function() {
	if ($('#store-form').length) {
	    let data     = require('./modules/store.data'),
	        methods  = require('./modules/store.methods'),
	        computed = require('./modules/store.computed');

	    // Cria uma instância do Vue 
	    const storeVue = new Vue({
	        el: '#store-form',

	        data:     data,
	        computed: computed,
	        methods:  methods,

	        ready: function() {
	        	console.log($('#storeid').val());
	        	if (!!$('#storeid').val()) {
	        		this.form.id = $('#storeid').val();
	        	}
	        },
	    });
	}
});

