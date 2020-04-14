import jquery from 'jquery'
import Vue from 'vue'
import Flickity from 'flickity'
import axios from 'axios'
import './css/app.css'


global.$ = jquery
global.jQuery = jquery
global.Vue = Vue
global.Flickity = Flickity
global.axios = axios


//modules
import './js/form'
import './js/slider'
//modules


//callback form switcher
try {
    setImmediate(() => {
        document.querySelectorAll('[callback-form]').forEach(item => {
            item.addEventListener('click', event => {
                window.callBackForm.switchForm()
            })
        })
    })
} catch { }

