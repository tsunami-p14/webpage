<template>
    <div class="card">
        <div class="card-header">
            <h5>Shops</h5>
        </div>
        <div class="card-body">
            <div v-if="getshops !== null">
                <select v-model="selshops" class="form-control custom-select" name="shop_list[]" multiple required>
                    <option v-for="shop in getshops.data" v-bind:value="shop.id">
                        {{shop.name}}</option>
                </select>
            </div>
            <!--<b-form-select v-model="selshops" :options="getshops" class="form-control" id="mitems" name="m_item_id"-->
                           <!--&gt;</b-form-select>-->
        </div>
    </div>


</template>

<script>
    export default {
        name: "shopSelect",
        props: {
            itemid:{
                type: String,
                default: "",
            },
        },
        data() {
            return {
                selshops: [],
                getshops: null,
            }
        },

        async created(){
            await axios
                .get('/api/getMshops/')
                .then(response => (this.getshops = response)).catch(error => console.log(error));
            console.log("--called");
            await axios
                .get('/api/getMshops/'+this.itemid)
                .then(response => (this.selshops = response.data)).catch(error => console.log(error));
            console.log(this.selisupply);
            console.log("-- relSupplyid called");
        },
    }
</script>

<style scoped>

</style>