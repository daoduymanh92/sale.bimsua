<template>
    <main>
        <div class="container mx-auto">
            <div class="bg-white">
                <div class="max-w-screen-xl mx-auto px-4">
                    <div class="font-bold text-xl mb-2">
                        Thông tin đơn hàng
                    </div>
                    <form class="w-full">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/4 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name"
                                >
                                    Tên
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name"
                                    type="text"
                                    placeholder="Jane"
                                    v-model="order.name"
                                />
                                <!-- <p class="text-red-500 text-xs italic">
                                Please fill out this field.
                            </p> -->
                            </div>
                            <div class="w-full md:w-1/4 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name"
                                >
                                    SDT
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name"
                                    type="text"
                                    placeholder="0368701515"
                                    v-model="order.phone"
                                />
                            </div>
                            <div class="w-full md:w-1/4 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name"
                                >
                                    Giới tính con
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state"
                                        v-model="order.gender"
                                    >
                                        <option value="0">Chưa xác định</option>
                                        <option value="1">Trai</option>
                                        <option value="2">Gái</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full md:w-1/4 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name"
                                >
                                    Loại đơn
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state"
                                        v-model="order.order_type"
                                    >
                                        <option value="0">Tạo đơn</option>
                                        <option value="1">Tư vấn tiếp</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Địa chỉ
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-password"
                                    type="text"
                                    v-model="order.address"
                                />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/4 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Loại thanh toán
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state"
                                        v-model="order.payment_method"
                                    >
                                        <option value="0">COD</option>
                                        <option value="1">Chuyển khoản</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full md:w-1/4 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Phí vận chuyển
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state"
                                        v-model="order.ship_discount"
                                    >
                                        <option value="0">Khách trả</option>
                                        <option value="1">Miễn phí</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-3/4 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-state"
                                >
                                    Thông tin đơn hàng
                                </label>
                                <textarea
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-zip"
                                    rows="4"
                                    v-model="order.information"
                                ></textarea>
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-zip"
                                >
                                    Tổng tiền
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-zip"
                                    type="text"
                                    v-model="order.total"
                                />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/4  px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Facebook
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-password"
                                    type="text"
                                    v-model="order.facebook"
                                />
                            </div>
                            <div class="w-full md:w-1/4  px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Dự kiện thời gian CSKH
                                </label>
                                <datepicker
                                    v-model="order.notification_date"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    :format="'yyyy-MM-dd'"
                                ></datepicker>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password"
                                >
                                    Thông tin thêm
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-password"
                                    type="text"
                                    v-model="order.note"
                                />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 flex justify-center">
                                <button
                                    class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
                                    v-on:click="create_order(order)"
                                    type="button"
                                >
                                    <svg
                                        class="fill-current w-4 h-4 mr-2"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"
                                        />
                                    </svg>
                                    <span>Đặt hàng</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import Repository from "../repositories/RepositoryFactory";
import EventBus from "./../event-bus";
import swal from "sweetalert";
import Datepicker from "vuejs-datepicker";
import moment from "moment";

const OrderRepository = Repository.get("orders");

export default {
    name: "Order",
    components: {
        Datepicker
    },
    data() {
        return {
            order: {
                name: null,
                phone: null,
                gender: 0,
                address: null,
                payment_method: 0, // 0 = COD, 1 = BANKING
                order_type: 0, // 0 = Tạo đơn, 1 = Tư vấn tiếp
                ship_discount: 0, // 0 = Khách trả, 1 = Miễn phí
                information: null,
                total: null,
                facebook: null,
                note: null,
                notification_date: moment()
                    .add(7, "days")
                    .format("yyyy-MM-DD") //
            }
        };
    },
    methods: {
        create_order: async order => {
            let response = await OrderRepository.create(order);
            if (response.status == 200) {
                swal("Bạn tạo đơn thành công.").then(value => {
                    window.location = "orders";
                });
            } else {
                swal("Có lỗi!", "!", "error");
            }
        }
    }
};
</script>
