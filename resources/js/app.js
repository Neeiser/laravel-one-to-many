const { default: Axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});


const showForm = document.getElementById('show-form');
const deleteBtn = document.getElementById('delete-btn');
const deleteForm = document.getElementById('delete-form');
const editForm = document.getElementById('edit-form');

if (deleteBtn) {
    document.querySelectorAll('#delete-btn').forEach(button =>{
        button.addEventListener('click', function(){

            this.showForm.classList.add('d-none');
            deleteBtn.classList.add('d-none');
            deleteForm.classList.remove('d-none');
            editForm.classList.add('d-none')
        })
    })
}