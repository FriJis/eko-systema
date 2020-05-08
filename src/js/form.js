import Vue from 'vue'
import axios from 'axios'
window.callBackForm = new Vue({
    el:'#form',
    data()
    {
        return {
            active: 0,
            fields: {
                uname: '',
                uphone: '',
                utext: ''
            },
            done: 0
            
        }
    },
    methods:
    {
        switchForm()
        {
            this.active = !this.active
        },
        send() {
            axios
                .post('/mail.php', this.fields)
                .then(response => {
                    this.done = 1
                    setTimeout(() => {
                        this.done = 0
                    }, 1500)
                })
        }
    }
})