import axios from 'axios';

const API_ENDPOINT = process.env.NODE_ENV == 'development' ? 'konilife.devs' : 'konilife.com';

const baseApi = axios.create({
    baseURL: `https://${API_ENDPOINT}/api/`,
    timeout: 2000,
});

export default baseApi;
