<template>
    <!--<div class="row">-->
    <!--<div class="col-sm-12" >-->
    <div class="card">
        <div class="card-header">
            <h5>Item Master</h5>
        </div>
        <div class="card-body">
            <b-form-select v-model="selmitems" :options="mitems" class="form-control" id="mitems" name="m_item_id" required
                           @input="selectedMitem" ></b-form-select>
            <div v-for="mitem in mitemsall">
                <div v-if="mitem.id==selmitems">
                    <ul>
                        <li>
                            {{mitem.m_makers.name}} {{mitem.m_makers.infor}}
                        </li>
                    </ul>
                    <hr>
                    <!--{{mitem.i_categories}}-->
                    <ul>
                        <li>
                            {{mitem.i_categories.name}}
                            <div v-for="mcate in mitem.i_categories.m_i_categories">
                                <ul>
                                    <li>
                                        {{mcate.name}} {{mcate.infor}}
                                        <ul>
                                            <div v-for="mcatedtl in mcate.m_i_category_dtls">
                                                <li>{{mcatedtl.name}} {{mcatedtl.infor}}</li>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                                <hr>
                            </div>
                        </li>
                    </ul>
                    <hr>
                    <div>
                        <ul>
                            <li>{{mitem.i_functions.name}}</li>
                            <ul>
                                <div v-for="mifuncdtl in mitem.i_functions.m_i_function_dtls">
                                    <li>{{mifuncdtl.name}} {{mifuncdtl.infor}}</li>
                                </div>
                            </ul>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <ul>
                            <li>{{mitem.i_interfaces.name}}</li>
                            <ul>
                                <div v-for="miinterdtl in mitem.i_interfaces.m_i_interfaces">
                                    <li>{{miinterdtl.name}} {{miinterdtl.infor}}</li>
                                </div>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
    <!--</div>-->

</template>

<script>
    export default {
        name: "mitemSelect",
        props: {
            mitemsall: {
                type: Array,
                required: true,
            },
            mitems: {
                type: Object,
                required: true,
            },
            mitemid: {
                type: Number,
                default: 0 ,
            },

        },
        data() {
            return {
                selmitems:this.mitemid,
            }
        },
        methods:{
            selectedMitem: function(){
                eventHub.$emit('setitem',{
                    'selectedid':this.selmitems
                });
            }

        },
        computed:{

        },

    }
</script>

<style scoped>

</style>