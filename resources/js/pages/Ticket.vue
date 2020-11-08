<template>
    <main>
        <div class="container mx-auto">
            <div class="bg-white">
                <div class="font-bold text-xl mb-2">
                    Thông tin chăm sóc
                </div>
                <div
                    class="w-full rounded overflow-hidden shadow-lg mb-8 bg-blue-100"
                    v-for="ticket in tickets"
                    :key="ticket.id"
                >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            {{ ticket.name }}
                        </div>
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                    <td class="border pr-8 py-2 border-none">
                                        SDT
                                    </td>
                                    <td class="border pr-8 py-2 border-none">
                                        {{ ticket.phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border pr-8 py-2 border-none">
                                        Facebook
                                    </td>
                                    <td class="border pr-8 py-2 border-none">
                                        <a
                                            :href="ticket.facebook"
                                            :target="'_blank'"
                                            >Link</a
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border pr-8 py-2 border-none">
                                        Mô tả thêm
                                    </td>
                                    <td class="border pr-8 py-2 border-none">
                                        {{ ticket.note }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-yellow-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                            >Đã tư vấn</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import Repository from "../repositories/RepositoryFactory";
import EventBus from "./../event-bus";
const TicketRepository = Repository.get("tickets");

export default {
    name: "Orders",
    data() {
        return {
            tickets: []
        };
    },
    async created() {
        let response = await TicketRepository.getList();
        this.tickets = response.data.data;
    },
    methods: {}
};
</script>
