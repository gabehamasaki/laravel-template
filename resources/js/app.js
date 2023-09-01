import './bootstrap';
import * as bootstrap from 'bootstrap';
import {createApp} from 'vue'
import HelloWorld from './components/HelloWorld.vue';

const app = createApp()

app.component('v-hello-world', HelloWorld)

app.mount('#app')
