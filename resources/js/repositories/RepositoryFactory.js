import PostRepository from "./postRepository";
import OrderRepository from "./orderRepository";
import TicketRepository from "./ticketRepository";

const repositories = {
    posts: PostRepository,
    orders: OrderRepository,
    tickets: TicketRepository
};
export default {
    get: name => repositories[name]
};
