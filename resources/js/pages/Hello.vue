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
                                v-model="order.tel"
                                type="text"
                                placeholder="SDT"
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue hover:border-blue-700 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Tên khách hàng</div>
                        <div class="inline col-span-2">
                            <input
                                v-model="order.name"
                                type="text"
                                placeholder=""
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Địa chỉ</div>
                        <div class="inline col-span-2">
                            <input
                                v-model="order.address"
                                type="text"
                                placeholder=""
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Thành phố</div>
                        <div class="inline col-span-2">
                            <select
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                v-model="order.province"
                                @change="changeCity($event)"
                            >
                                <option
                                    v-for="city in cities"
                                    :key="city.id"
                                    :value="city.id"
                                    >{{ city.alias }}</option
                                >
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Quận huyện</div>
                        <div class="inline col-span-2">
                            <select
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                v-model="order.district"
                                @change="changeDistrict($event)"
                            >
                                <option
                                    v-for="district in district"
                                    :key="district.id"
                                    :value="district.id"
                                    >{{ district.alias }}</option
                                >
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Phường xã</div>
                        <div class="inline col-span-2">
                            <select
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                                v-model="order.ward"
                            >
                                <option
                                    v-for="ward in ward"
                                    :key="ward.id"
                                    :value="ward.id"
                                    >{{ ward.alias }}</option
                                >
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Tên đường/phố</div>
                        <div class="inline col-span-2">
                            <input
                                v-model="order.street"
                                type="text"
                                placeholder=""
                                class="w-full p-1 border rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <h1 class="font-bold">Thông tin lấy hàng</h1>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">
                            Hình thức gửi hàng
                        </div>
                        <div class="inline col-span-2">
                            <label class="mr-8">
                                <input
                                    v-model="order.pick_option"
                                    type="radio"
                                    name="pick_option"
                                    class="mr-1"
                                    v-bind:value="'cod'"
                                    checked
                                />Lấy hàng tận nơi
                            </label>
                            <label class="">
                                <input
                                    v-model="order.pick_option"
                                    type="radio"
                                    name="pick_option"
                                    class="mr-1"
                                    v-bind:value="'post'"
                                />Gửi hàng bưu cục
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Địa chỉ lấy hàng</div>
                        <div class="inline col-span-2">
                            <input
                                v-model="order.pick_address"
                                type="text"
                                placeholder=""
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
                                placeholder=""
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
                                    v-model="product.weight"
                                >
                                    <option value="0.1" selected>0.1</option>
                                    <option value="0.2">0.2</option>
                                    <option value="0.3">0.3</option>
                                    <option value="0.4">0.4</option>
                                </select>
                            </div>
                            <div class="inline col-span-2 mx-1">
                                <input
                                    v-model="product.quantity"
                                    type="number"
                                    placeholder="Số lượng"
                                    min="1"
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
                                    v-model="order.transport"
                                    type="radio"
                                    name="transport"
                                    class="mr-1"
                                    v-bind:value="'road'"
                                    checked
                                />Đường bộ
                            </label>
                            <label class="">
                                <input
                                    v-model="order.transport"
                                    type="radio"
                                    name="transport"
                                    class="mr-1"
                                    v-bind:value="'fly'"
                                />Đường bay
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1 relative ">
                            <label class="mr-8">
                                Phí ship
                            </label>

                            <label> <b>0</b> </label><small>đ</small>
                        </div>
                        <div class="inline col-span-2">
                            <label class="mr-8">
                                <input
                                    v-model="order.is_freeship"
                                    type="radio"
                                    name="freship"
                                    class="mr-1"
                                    v-bind:value="'1'"
                                    checked
                                />Shop trả
                            </label>
                            <label class="">
                                <input
                                    v-model="order.is_freeship"
                                    type="radio"
                                    name="freship"
                                    class="mr-1"
                                    v-bind:value="'0'"
                                />Khách trả
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">
                            Tiền thu hộ
                        </div>
                        <div class="inline col-span-2">
                            <input
                                v-model="order.pick_money"
                                type="number"
                                placeholder="0 đ"
                                class="w-full p-1 border-b-2 rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Giá trị hàng</div>
                        <div class="inline col-span-2">
                            <input
                                v-model="order.value"
                                type="text"
                                placeholder="0"
                                class="w-full p-1 border-b-2 rounded border-gray-500 focus:border-blue-500 hover:border-blue-500 focus:outline-none"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 my-1">
                        <div class="inline col-span-1">Tổng tiền thu</div>
                        <div class="inline col-span-2">
                            <input
                                type="text"
                                placeholder=""
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
const AddressRepository = Repository.get("addresses");

export default {
    name: "Order",
    components: {
        Datepicker
    },
    data() {
        return {
            order: {
                pick_name: "Hegen Việt Nam",
                pick_money: 0,
                value: "0",
                pick_address:
                    "Số 5, Hẻm 141/150/38, Phố Giáp Nhị, Giáp Nhị, Quận Hoàng Mai, Hà Nội",
                pick_province: "Hà Nội",
                pick_district: "Quận Hoàng Mai",
                pick_ward: "Giáp Nhị", // 0 = Tạo đơn, 1 = Tư vấn tiếp
                pick_tel: "0969146465", // 0 = Khách trả, 1 = Miễn phí
                pick_email: "hoang.liemtlu@gmail.com",
                name: "",
                address: "",
                province: "",
                district: "",
                ward: "",
                street: "",
                hamlet: "",
                tel: "",
                note: "",
                email: "Null",
                is_freeship: "0",
                pick_option: "cod",
                transport: "road",
                notification_date: moment()
                    .add(7, "days")
                    .format("yyyy-MM-DD") //
            },
            products: [
                {
                    name: null,
                    weight: 0.1,
                    quantity: 1
                }
            ],
            district: [],
            ward: []
        };
    },
    mounted() {
        this.get_cities();
    },
    computed: {
        product_length: function() {
            return this.products.length;
        },
        cities() {
            return this.$store.state.address.cities;
        }
    },
    methods: {
        async get_cities() {
            await this.$store.dispatch("address/getCities");
        },
        changeCity(event) {
            let citi_id = event.target.value;
            AddressRepository.getList({
                parentId: citi_id
            }).then(res => {
                this.district = res.data.data;
            });
        },
        changeDistrict(event) {
            let district_id = event.target.value;
            AddressRepository.getList({
                parentId: district_id
            }).then(res => {
                this.ward = res.data.data;
            });
        },
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
        },
        getShipFee: () => {
            console.log(order.province);
        }
    }
};
</script>
