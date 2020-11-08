import Client from "./clients/axiosClient";
const resource = "/tickets";

export default {
    getList(payload) {
        return Client.get(`${resource}`, {
            params: payload
        });
    },
    getPost(id) {
        return Client.get(`${resource}/${id}`);
    },
    create(payload) {
        return Client.post(`${resource}/order`, payload);
    },
    update(payload, id) {
        return Client.put(`${resource}/${id}`, payload);
    },
    delete(id) {
        return Client.delete(`${resource}/${id}`);
    }

    // MANY OTHER ENDPOINT RELATED STUFFS
};
