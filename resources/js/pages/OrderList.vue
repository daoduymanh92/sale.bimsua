<template>
    <main>
        <div class="container mx-auto">
            <div class="bg-white">
                <div class="max-w-screen-xl mx-auto px-4">
                    <div class="font-bold text-xl mb-2">Danh sách đơn hàng</div>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Tên</th>
                                <th class="px-4 py-2">Số điện thoại</th>
                                <th class="px-4 py-2">Giới tính</th>
                                <th class="px-4 py-2">Địa chỉ</th>
                                <th class="px-4 py-2">Loại thanh toán</th>
                                <th class="px-4 py-2">Tình trạng đơn hàng</th>
                                <th class="px-4 py-2">Thông tin đơn</th>
                                <th class="px-4 py-2">Giá tiền</th>
                                <th class="px-4 py-2">Facebook</th>
                                <th class="px-4 py-2">Thông tin thêm</th>
                                <th class="px-4 py-2">Người tạo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="order in orders" :key="order.id">
                                <td class="border px-4 py-2">
                                    {{ order.name }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.phone }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.gender }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.address }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.payment_method }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.delevery_status }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.information }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.total }}
                                </td>
                                <td class="border px-4 py-2">
                                    <p
                                        class="text-red-900"
                                        v-if="order.facebook"
                                    >
                                        <a :href="order.facebook">Link</a>
                                    </p>
                                </td>

                                <td class="border px-4 py-2">
                                    {{ order.note }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ order.order_by }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import Repository from "../repositories/RepositoryFactory";
import EventBus from "./../event-bus";
const OrderRepository = Repository.get("orders");

export default {
    name: "Orders",
    data() {
        return {
            isOpen: false,
            orders: []
        };
    },
    async created() {
        let response = await OrderRepository.getList();
        this.orders = response.data.data;
    },
    methods: {
        getList: async () => {
            let response = await OrderRepository.getList();
            console.log(response.data.data);
            this.orders = response.data.data;
            console.log(this.orders);
        }
    }
};
</script>
