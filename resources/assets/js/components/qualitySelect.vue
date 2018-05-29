<template>
    <div class="card">
        <div class="card-header">
            <h5>Quality</h5>
        </div>
        <div class="card-body">
            <div v-if="getqlvl !== null">
                <!--{{getqlvl}}-->
                <select v-model="selqlvl" class="form-control custom-select" name="i_quality_lvl_id" v-on:change="selectedQlvl" required>
                    <option v-for="qlvl in getqlvl.data" v-bind:value="qlvl.id">
                        {{qlvl.name}}
                    </option>
                </select>
                <!--{{getqcategory}}-->

                <div v-if="getqcategory !==null ">
                    <!--{{selqcategory}}-->
                    <select v-model="selqcategory" class="form-control custom-select" name="m_i_qlty_category_id" required>
                        <option v-for="qc in getqcategory.data" v-bind:value="qc.id">
                            {{(qc.name+" "+qc.score)}}
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "qualitySelect",
        props: {
            itemid:{
                type: String,
                default: "",
            },
        },
        data() {
            return {
                getqlvl: [],
                selqlvl: 1,
                getqcategory:[],
                selqcategory:null,
            }
        },
        async created(){
            await axios
                .get('/api/getQualities/')
                .then(response => (this.getqlvl = response)).catch(error => console.log(error));
            console.log("--new getQualities");
            await axios
                .get('/api/getQualities/'+this.itemid)
                .then(response => (this.selqlvl = response.data)).catch(error => console.log(error));
            console.log("--new getQualities");
            await axios
                .get('/api/getQCategories/'+this.selqlvl)
                .then(response => (this.getqcategory = response)).catch(error => console.log(error));
            await axios
                .get('/api/getMQuality/'+this.itemid)
                .then(response => (this.selqcategory = response.data)).catch(error => console.log(error));
            console.log("--new getQualities");
        },

        methods: {
            async selectedQlvl(val) {
                if(this.selqlvl!==null){
                    await axios
                        .get('/api/getQCategories/'+this.selqlvl)
                        .then(response => (this.getqcategory = response)).catch(error => console.log(error));
                    // console.log(this.selqlvl);
                    console.log("--new getQCategories");
                }else{
                    this.selqlvl=0;
                    console.log(this.selqlvl);
                    console.log("--null getQCategories");
                }
            },
        }

    }
</script>


<style scoped>

</style>