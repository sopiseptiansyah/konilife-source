<template>
    <div>
        <section class="section section__store">
            <div class="store-wrapper">
                <div class="store-wrapper__col-left">
                    <div class="store-wrapper__selector">
                        <h1>
                            Temukan Merchant Terdekat Dikotamu
                        </h1>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <select class="form-control" v-model="currentProvince" v-on:change="provChange">
                                    <option selected disabled value="null">
                                        Pilih Provinsi
                                    </option>
                                    <option v-for="item in provinces" :key="item.id" :value="item.id">
                                        {{item.name}}
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <select class="form-control" v-model="currentCity" v-on:change="cityChange">
                                    <option selected disabled value="null">
                                        Pilih Kota/Kabupaten
                                    </option>
                                    <option v-for="item in cities" :key="item.id" :value="item.id">
                                        {{item.name}}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="list-store" v-if="storeList.length > 0">
                        <div class="single-store" v-for="store in storeList" :key="store.id" v-on:click="open(store)" v-bind:class="store.position === center ? 'active' : ''">
                            <h2 class="single-store__name">
                                {{store.name}}
                            </h2>
                            <span class="single-store__address">
                               {{store.address}}
                            </span>
                            <!-- <a :href="`https://wa.me/+62${store.phone}?text=Hallo, Toko ${store.name}%0a`" target="_blank" class="btn btn-share btn-share-whatsapp">
                                <img src="/images/whatsapp.svg" />
                                Hubungi via WhatsApp
                            </a> -->
                        </div>
                        <pagination :data="pages" @paginate="changePage" />
                    </div>
                    <div class="list-store" v-else>
                        <div class="blank">
                            <img src="/images/store-notfound.png" alt="Blank Store" />
                            <h2>
                                Merchant Sedang Disiapkan
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="store-wrapper__col-right">
                    <googlemaps-map :center.sync="center" :zoom.sync="mapOptions.zoom" :options="mapOptions" @idle="onIdle"
                        @click="onMapClick" style="width: 100%; height: 100%">
                        <!-- User Position -->
                        <googlemaps-user-position @update:position="setUserPosition" />
                        <googlemaps-marker 
                            v-for="marker of storeList" :key="marker._id" 
                            :label="{
                                color: marker.position === center ? '#34d76e' : 'white',
                                fontFamily: 'Material Icons',
                                fontSize: '22px',
                                text: 'store_mall_directory',
                            }" 
                            :position="marker.position" 
                            @click="selectMarker(marker)"
                        >
                        </googlemaps-marker>
                    </googlemaps-map>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Pagination from '../../components/Paginate';

    export default {
        name: 'Store',
        components:{
            Pagination
        },
        data: () => ({
            provinces: [],
            currentProvince: null,
            cities: [],
            currentCity: null,
            center: {
                lat: -6.917464,
                lng: 107.619125
            },
            mapOptions: {
                streetViewControl: false,
                mapTypeControl: false,
                zoom: 14,
                styles: [{
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    }
                ]
            },
            storeList: [],
            pages: {},
        }),
        methods: {
            getStore(){
                baseApi.get('stores')
                .then(
                    response => {
                        // console.log(response.data);
                        this.storeList = response.data.data;
                        return this.pages = response.data;
                    },
                    error => {
                        console.log(error);
                    }
                );
            },
            getProvinsi(){
                baseApi.get('provinces')
                .then(
                    response => {
                        // console.log(response.data);
                        return this.provinces = response.data.data;
                    },
                    error => {
                        console.log(error);
                    }
                );
            },
            open(store) {
                this.center = store.position;
            },
            onIdle() {

            },
            onMapClick() {

            },
            setUserPosition() {

            },
            provChange(event){
                baseApi.get('province/' + this.currentProvince)
                .then(
                    response => {
                        // console.log(response.data);
                        return this.cities = response.data.data;
                    },
                    error => {
                        console.log(error);
                    }
                );
            },
            cityChange(){
                baseApi.get('stores/' + this.currentCity)
                .then(
                    response => {
                        console.log(response.data);
                        this.storeList = response.data.data;
                        return this.pages = response.data;
                    },
                    error => {
                        console.log(error);
                    }
                );
            },
            selectMarker(marker) {
                this.center = marker.position;
            },
            changePage(page){
                if(this.currentCity != null){
                    baseApi.get('stores/' + this.currentCity + `?page=${page}`)
                    .then(
                        response => {
                            console.log(response.data);
                            this.storeList = response.data.data;
                            return this.pages = response.data;
                        },
                        error => {
                            console.log(error);
                        }
                    );
                }
                else{
                    baseApi.get('stores' + `?page=${page}`)
                    .then(
                        response => {
                            console.log(response.data);
                            this.storeList = response.data.data;
                            return this.pages = response.data;
                        },
                        error => {
                            console.log(error);
                        }
                    );
                }
            }
        },
        mounted(){
            this.getStore();
            this.getProvinsi();
        }
    }

</script>

<style>

</style>
