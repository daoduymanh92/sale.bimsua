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
                    <div
                        class="w-full rounded overflow-hidden shadow-lg mb-8 bg-blue-100"
                        v-for="order in orders"
                        :key="order.id"
                    >
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                {{ order.name }}
                            </div>
                            <table class="table-auto">
                                <tbody>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            SDT
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Giới tính
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.gender }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Facebook
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                                                                    <a
                                            :href="order.facebook"
                                            :target="'_blank'"
                                            >Link</a
                                        >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Địa chỉ
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Loại thanh toán
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.payment_method }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Phí ship
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.ship_discount }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Tình trạng đơn hàng
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            <select
                                                class="form-select mt-1 block"
                                                @change="
                                                    changePayment(
                                                        $event,
                                                        order.id
                                                    )
                                                "
                                            >
                                                <option
                                                    value="0"
                                                    :selected="
                                                        order.delevery_status ==
                                                            0
                                                    "
                                                    >Đã xác nhận</option
                                                >
                                                <option
                                                    value="1"
                                                    :selected="
                                                        order.delevery_status ==
                                                            1
                                                    "
                                                    >Đã giao hàng</option
                                                >
                                                <option
                                                    value="2"
                                                    :selected="
                                                        order.delevery_status ==
                                                            2
                                                    "
                                                    >Hoàn hàng</option
                                                >
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Thông tin đơn
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.information }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Giá tiền
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.total }}
                                        </td>
                                    <tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Thông tin thêm
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.note }}
                                        </td>
                                    </tr>
                                    </tr>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            Ngày cập nhật
                                        </td>
                                        <td
                                            class="border pr-8 py-2 border-none"
                                        >
                                            {{ order.updated_at }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                >Chỉnh sửa</span
                            >
                        </div>
                    </div>
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
