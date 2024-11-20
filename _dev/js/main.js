'use strict';

const $ = require('./jquery.js');
window.$ = window.jQuery = $;
const App = require('./modules/app.js');
const Header = require('./modules/header.js');

$(function(){
	let app = new App();
	let header = new Header();
});
