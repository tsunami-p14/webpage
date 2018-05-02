<template>
    <div>
        {{selected}}
        <v-select :value.sync="selected" :options="options" ></v-select>
    </div>
</template>

<script>
    export default {
        name: "VueSelectText",
        data(){
            return{
                selected:null,
                options:[
                    'test1',
                    'test2',
                    'test3',
                    'test4',
                    'test5'
                ]
            }
        }
    }
</script>

<style scoped>

</style>