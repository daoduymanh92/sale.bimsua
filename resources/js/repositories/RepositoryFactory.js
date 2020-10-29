import PostRepository from "./postRepository";
import OrderRepository from "./orderRepository";

const repositories = {
    posts: PostRepository,
    orders: OrderRepository
};
export default {
    get: name => repositories[name]
};
