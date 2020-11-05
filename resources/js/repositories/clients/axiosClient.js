import axios from "axios";

const baseDomain = process.env.MIX_ROOT_API;
const baseURL = `${baseDomain}`; // Incase of /api/v1;

// ALL DEFUALT CONFIGURATION HERE

export default axios.create({
    baseURL,
    headers: {
        // "Authorization": "Bearer xxxxx"
    }
});
