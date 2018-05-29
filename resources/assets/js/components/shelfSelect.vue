<template>
    <div class="card">
        <div class="card-header">
            <h5>Shelvs</h5>
        </div>
        <div class="card-body">
            <div v-if="getshelves !== null">
                <!--{{getshelves}}-->
                <select v-model="selshelves" class="form-control custom-select" name="shelf_id" v-on:change="selectedshelf" required>
                    <option v-for="shelf in getshelves.data" v-bind:value="shelf.id">
                        {{shelf.name}}
                    </option>
                </select>
                <!--{{getqcategory}}-->

                <div v-if="getlocations !==null ">
                    <!--{{getlocations}}-->
                    <select v-model="sellocation" class="form-control custom-select" name="location_id" required>
                        <option v-for="location in getlocations.data" v-bind:value="location.id">
                            {{(location.name)}}
                        </option>
                    </select>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "shelvesSelect",
        props: {
            shelfid:{
                type: Number,
                default: 1,
            },
            locationid:{
                type: Number,
                default: 1,
            },
        },
        data() {
            return {
                getshelves: [],
                getlocations:[],
                selshelves:this.shelfid,
                sellocation:this.locationid,

            }
        },
        async created(){
            await axios
                .get('/api/getshelves/')
                .then(response => (this.getshelves = response)).catch(error => console.log(error));
            console.log("--new getshelves");
            await axios
                .get('/api/getlocations/'+this.selshelves)
                .then(response => (this.getlocations = response)).catch(error => console.log(error));
            console.log("--new getshelves");

        },

        methods: {
            async selectedshelf() {
                if(this.selshelves!==null){
                    await axios
                        .get('/api/getlocations/'+this.selshelves)
                        .then(response => (this.getlocations = response)).catch(error => console.log(error));
                    // console.log(this.selqlvl);
                    console.log("--new getlocatons");
                }
            },
        }

    }
</script>


<style scoped>

</style>