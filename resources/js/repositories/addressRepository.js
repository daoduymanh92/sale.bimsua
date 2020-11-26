import Client from "./clients/axiosClient";
const resource = "/addresses";

export default {
    getList(payload) {
        return Client.get(`${resource}`, {
            params: payload
        });
    }
};
