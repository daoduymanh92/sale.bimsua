import axios from "axios";

const baseDomain = "http://127.0.0.1:8000/api/";
const baseURL = `${baseDomain}`; // Incase of /api/v1;

// ALL DEFUALT CONFIGURATION HERE

export default axios.create({
    baseURL,
    headers: {
        // "Authorization": "Bearer xxxxx"
    }
});
