import { createApp } from 'vue';
import App from '../views/components/app.vue';

import axios from 'axios';
import VueAxios from 'vue-axios';

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import router from './routes';


import '../css/app.css';
axios.defaults.baseURL = 'http://127.0.0.1:8000/api';
axios.defaults.withCredentials = true; // Necesario para Sanctum

// ✅ Primero crea la instancia de la app
const app = createApp(App);

// ✅ Luego usa Axios en la app
app.use(VueAxios, axios);
app.use(router)
// ✅ Finalmente, monta la app en el div con id="app"
app.mount('#app');
