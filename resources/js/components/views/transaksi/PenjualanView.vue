<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="col-form-label">Produk</div>
                            <select class="js-example-basic-single col-sm-12">
                                <option value="AL">ACYCLOVIR 400 MG</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Jumlah</label>
                            <input class="form-control" type="text" placeholder="Masukan Jumlah Produk" data-bs-original-title=""
                                   title="">
                        </div>
                        <hr class="mt-4 mb-4">
                        <h5 class="py-2">Detail Produk</h5>
                        <div class="my-2">
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Jenis</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Kategori</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Satuan</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Harga Jual</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row gy-2">
                    <div class="col-12">
                        <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100">Lihat Penyimpanan</button>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100">Tambah Pelanggan</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-danger txt-dark btn-md me-3 w-100">Draft</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-outline-warning txt-dark btn-md me-3 w-100">Cancel</button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success btn-lg me-3 w-100">Simpan Transaksi</button>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-4">
                                <label class="form-label" for="exampleFormControlInput1">No.Transaksi</label>
                                <input class="form-control disabled" disabled id="exampleFormControlInput1" type="email" placeholder="Otomatis" data-bs-original-title="" title="">
                            </div>
                            <div class="col-4">
                                <label>Pelanggan</label>
                                <select class="js-example-basic-single col-sm-12 form-control-sm">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="form-label" for="exampleFormControlSelect9">Metode Pembayaran</label>
                                <select class="form-select form-control-sm digits" id="exampleFormControlSelect9">
                                    <option>Cash</option>
                                    <option>BPJS</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body py-3">
                        <div class="table-responsive">

                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Diskon (%)</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="i in 10">
                                    <td>{{i}}</td>
                                    <td>Panadol </td>
                                    <td>Rp. 131.000</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>Rp. 655.000</td>
                                    <td>
                                        <button class="btn btn-outline-secondary txt-secondary btn-sm" type="button"
                                                data-bs-original-title="">Remove
                                        </button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body p-4">
                        <div class="d-flex flex-column ">
                            <h6>Rincian Harga</h6>
                            <div class="d-flex justify-content-between mt-2">
                                <div><p class="fw-light">Total Harga Barang</p></div>
                                <div><p class="fw-bolder">Rp. 612.311</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div><p class="fw-light">Total Potongan Diskon</p></div>
                                <div><p class="fw-bolder txt-danger">- Rp.131.000</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div><p class="fw-light">PPN (10%)</p></div>
                                <div><p class="fw-bolder">127.900</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div><h5 class="fw-bold text-success">Grand Total</h5></div>
                                <div><H5 class="fw-bold text-success">Rp. 612.312</H5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent, onMounted, reactive, ref} from "vue";
import axios from 'axios';
export default defineComponent({
    name: "AttributeView",
    setup() {
        const product = ref([]);

        const getProductAndCustomer = async () => {
            let response = await axios.get('localhost:3000/api/product')
            product.value = response.data.data
        }
        onMounted(() => {
            getProductAndCustomer
        })
    },
});
</script>
