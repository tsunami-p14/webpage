<template>
    <div class="card">
        <div class="card-header">
            <h5>付属品</h5>
            <!--sply:{{getsupply}}-->
        </div>
        <div class="card-body">
            <b-form-select v-model="selisupply" :options="isupplies" class="form-control" id="isupplies" name="i_supply_id" required @input="selectedSupply"/>
            <!--{{getmsupply}}-->
            <div v-if="getmsupply !== null">
                <div v-for="msupply in getmsupply.data">
                    {{msupply.name}}
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "supplySelect",
        props: {
            isupplies: {
                type: Object,
                required: true,
            },
            itemid:{
                type: String,
                default: "",
            }

        },
        data() {
            return {
                selisupply: null,
                getmsupply: null,
                getsupply: null,
            }
        },

        async created(){
            await axios
                .get('/api/relSupplyid/'+this.itemid)
                .then(response => (this.selisupply = response.data)).catch(error => console.log(error));
            console.log(this.selisupply);
            console.log("-- relSupplyid called");
        },
        methods: {
            selectedSupply: function (val) {
                axios
                    .get('/api/getMsupplies/'+this.selisupply)
                    .then(response => (this.getmsupply = response)).catch(error => console.log(error));
            },
        }

    }

</script>

<style scoped>

</style>