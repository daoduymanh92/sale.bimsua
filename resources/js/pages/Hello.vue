<template>
    <main>
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-4">
                <div class="rounded-lg border-red-500">
                    <h1 class="font-bold">Thông tin đơn hàng</h1>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Số điện thoại</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue hover:border-blue-700 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Tên khách hàng</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Địa chỉ</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Thành phố</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Quận huyện</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Phường xã</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <h1 class="font-bold">Thông tin lấy hàng</h1>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Hình thức gửi hàng</div>
                        <div class="inline col-span-2">
                            <label class="mr-8">
                                <input
                                    type="radio"
                                    name="optradio"
                                    class="mr-1"
                                />Lấy hàng tận nơi
                            </label>
                            <label class="">
                                <input
                                    type="radio"
                                    name="optradio"
                                    class="mr-1"
                                />Gửi hàng bưu cục
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Địa chỉ lấy hàng</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <h1 class="font-bold">Thông tin hỗ trợ</h1>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Facebook</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">
                            Dự kiện thời gian CSKH
                        </div>
                        <div class="inline col-span-2">
                            <datepicker
                                v-model="order.notification_date"
                                class="w-full p-1 border rounded border-gray-500 focus:outline-none"
                                :format="'yyyy-MM-dd'"
                            ></datepicker>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Thông tin hỗ trợ</div>
                        <div class="inline col-span-2">
                            <textarea
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                rows="4"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border-yellow-500">
                    <h1 class="font-bold">Thông tin hàng hóa</h1>
                    <div class="mb-8">
                        <div
                            class="grid grid-cols-12 my-1"
                            v-for="(product, index) in products"
                        >
                            <div class="inline col-span-6 mx-1">
                                <input
                                    type="text"
                                    placeholder="Tên sản phẩm"
                                    v-model="product.name"
                                    class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                />
                            </div>
                            <div class="inline col-span-2 mx-1">
                                <select
                                    id="cars"
                                    class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                >
                                    <option value="0.1">0.1</option>
                                    <option value="0.2">0.2</option>
                                    <option value="0.3">0.3</option>
                                    <option value="0.4" selected>0.4</option>
                                </select>
                            </div>
                            <div class="inline col-span-2 mx-1">
                                <input
                                    type="text"
                                    placeholder="Số lượng"
                                    class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                />
                            </div>
                            <div class="inline col-span-2">
                                <button
                                    v-if="product_length == index + 1"
                                    type="button"
                                    class="w-full ml-5 bg-white py-2 px-3 border border-blue-300 rounded-md shadow-sm text-sm leading-4 font-medium text-blue-700 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    @click="addProduct"
                                >
                                    Thêm
                                </button>
                                <button
                                    v-else
                                    type="button"
                                    class="w-full ml-5 bg-white py-2 px-3 border border-red-300 rounded-md shadow-sm text-sm leading-4 font-medium text-red-700 hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    @click="removeProduct(index)"
                                >
                                    Xóa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">
                            Hình thức vận chuyển
                        </div>
                        <div class="inline col-span-2">
                            <label class="mr-8">
                                <input
                                    type="radio"
                                    name="optradio"
                                    class="mr-1"
                                />Đường bộ
                            </label>
                            <label class="">
                                <input
                                    type="radio"
                                    name="optradio"
                                    class="mr-1"
                                />Đường bay
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1 relative ">
                            <label class="mr-8"> Phí ship </label>

                            <label> <b>0</b> </label><small>đ</small>
                        </div>
                        <div class="inline col-span-2">
                            <label class="mr-8">
                                <input
                                    type="radio"
                                    name="optradio"
                                    class="mr-1"
                                />Shop trả
                            </label>
                            <label class="">
                                <input
                                    type="radio"
                                    name="optradio"
                                    class="mr-1"
                                />Khách trả
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Tiền thu hộ</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border-b-2 rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Giá trị hàng</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border-b-2 rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Tổng tiền thu</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder="This is input"
                                class="w-full p-1 border-b-2 rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 my-1 mt-8">
                        <button
                            class="w-full p-1 bg-yellow-400 rounded font-bold text-black"
                        >
                            Tạo đơn
                        </button>
                    </div>
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
            },
            products: [
                {
                    name: null,
                    mass: 0,
                    amount: 0
                }
            ]
        };
    },
    computed: {
        product_length: function() {
            return this.products.length;
        }
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
        },
        addProduct() {
            this.products.push({
                name: null,
                mass: 0,
                amount: 0
            });
        },
        removeProduct(index) {
            this.products.splice(index, 1);
        }
    }
};
</script>
