import jquery from 'jquery'
import Vue from 'vue'
import Flickity from 'flickity'
import axios from 'axios'
import './css/app.css'
//global init

global.$ = jquery
global.jQuery = jquery
global.Vue = Vue
global.Flickity = Flickity
global.axios = axios

//import components
import garant from './components/garant.vue'
// new Vue({
// 	el:'#app',
// 	// components:{
// 	// 	garant
// 	// }
// })