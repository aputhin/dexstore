
// jQuery & Bootstrap init
var $ = window.$ = window.jQuery = require('jquery');
var jMask = require('jquery-mask-plugin');
var Bootstrap   = require('bootstrap-sass');

// vue.js init
var Vue          = require('vue');
var VueResource  = require('vue-resource');
Vue.use(VueResource);

$(document).ready( function() {

	$('.time').mask('00:00');

	if ($('#store-form').length) {
	    let data    = require('./modules/store.data'),
	        methods = require('./modules/store.methods');

	    // Cria uma instância do Vue 
	    const storeVue = new Vue({
	        el: '#store-form',

	        data:    data,
	        methods: methods,

	    });
	}
});

