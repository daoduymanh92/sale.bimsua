import PostRepository from "./postRepository";
import OrderRepository from "./orderRepository";
import TicketRepository from "./ticketRepository";
import AddressRepository from "./addressRepository";

const repositories = {
    posts: PostRepository,
    orders: OrderRepository,
    tickets: TicketRepository,
    addresses: AddressRepository
};
export default {
    get: name => repositories[name]
};
