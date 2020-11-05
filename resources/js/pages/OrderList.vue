<template>
    <main>
        <div class="container mx-auto">
            <div class="bg-white">
                <div class="grid grid-cols-6 pb-8">
                    <div>
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
                            @click="$router.push('order')"
                        >
                            <span>Tạo đơn</span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-6 pb-8">
                    <div>
                        <label class="block">
                            <span class="text-gray-700">Loại thanh toán</span>
                            <select class="form-select mt-1 block">
                                <option>All</option>
                                <option>COD</option>
                                <option>BANKING</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <span class="text-gray-700"
                                >Tình trạng đơn hàng</span
                            >
                            <select class="form-select mt-1 block">
                                <option>All</option>
                                <option>Đã xác nhận</option>
                                <option>Đã giao hàng</option>
                                <option>Hoàn hàng</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="max-w-screen-xl mx-auto">
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
                                <th class="px-4 py-2">Ngày cập nhật</th>
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
                                    <select
                                        class="form-select mt-1 block"
                                        @change="
                                            changePayment($event, order.id)
                                        "
                                    >
                                        <option
                                            value="0"
                                            :selected="
                                                order.delevery_status == 0
                                            "
                                            >Đã xác nhận</option
                                        >
                                        <option
                                            value="1"
                                            :selected="
                                                order.delevery_status == 1
                                            "
                                            >Đã giao hàng</option
                                        >
                                        <option
                                            value="2"
                                            :selected="
                                                order.delevery_status == 2
                                            "
                                            >Hoàn hàng</option
                                        >
                                    </select>
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
                                <td class="border w-1/5">
                                    {{ order.updated_at }}
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
        let response = await OrderRepository.getList({ delevery_status: 0 });
        this.orders = response.data.data;
    },
    methods: {
        getList: () => {
            let response = OrderRepository.getList({
                delevery_status: 0
            })
                .then(response => {
                    this.orders = response.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        changePayment: async function(event, id) {
            let response = await OrderRepository.update(
                { delevery_status: event.target.value },
                id
            );

            if (response.status == 200) {
                let response = OrderRepository.getList({
                    delevery_status: 0
                })
                    .then(response => {
                        this.orders = response.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    }
};
</script>
