import Vue from 'vue'
import axios from 'axios'
window.callBackForm = new Vue({
    el:'#form',
    data()
    {
        return {
            active: 0
        }
    },
    methods:
    {
        switchForm()
        {
            this.active = !this.active
        }
    }
})