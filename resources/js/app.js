import './bootstrap';
import '../sass/app.scss'

import {createApp} from "vue/dist/vue.esm-bundler";
import ViewPenjualan  from "./components/views/transaksi/PenjualanView.vue";
import MetodePembayaranComponent  from "./components/metode-pembayaran.vue";

const app = createApp({})

app.component('view-penjualan', ViewPenjualan);
app.component('metode-pembayaran', MetodePembayaranComponent);

app.mount('#app');
