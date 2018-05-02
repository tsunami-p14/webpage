<template>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <!--<div>name:{{makers}}!&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;</div>-->
                <!--セレクト同期。上で選んだものが下でも選ばれる START-->
                    <!--<b-form-select v-model="selected" :options="makerinfor" class="mb-3" size="sm" />-->
                    <!--<div>Selected: <strong>{{ selected }}</strong></div>-->
                <!--セレクト同期。上で選んだものが下でも選ばれる End-->

                <div class="panel-heading">
                   <h2>Makers</h2>
                </div>

                <div class="panel-body">
                    <b-form-select v-model="selected" :options="makers" class="form-control" id="makers" name="m_maker_id"/>
                    <div>
                        name:<br><strong>{{makers[selected]}}</strong><br>
                    </div>
                    <div>
                        詳細:<br><strong>{{makerinfor[selected]}}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>category</h2>
                </div>
                <div class="panel-body">
                    <b-form-select v-model="selcategory" :options="icategory" class="form-control" name="i_category_id" />
                    <div>
                        <div v-for="item in icategoryall">
                            <div v-if="item.id==selcategory">
                                <!--{{item.id}}:{{selcategory}}-->
                                <ul>
                                    <li>
                                        {{item.name}}
                                        <div v-for="micategory in item.m_i_categories">
                                            <ul>
                                                <li>
                                                    {{micategory.name}}
                                                    <ul>
                                                        <li>
                                                            {{micategory.infor}}
                                                            <div v-for="micategorydtl in micategory.m_i_category_dtls">
                                                                <ul>
                                                                    <li>
                                                                        {{micategorydtl.name}}
                                                                        <ul>
                                                                            <li>
                                                                                {{micategorydtl.infor}}
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Function</h2>
                </div>
                <div class="panel-body">
                    <b-form-select v-model="selfunction" :options="ifunction" class="form-control" name="i_function_id" />
                    <div v-for="ifitem in ifunctionall">
                        <div v-if="ifitem.id==selfunction">
                            <ul>
                                <li>
                                    {{ifitem.name}}
                                    <div v-for="ifitemdtl in ifitem.m_i_function_dtls">
                                    <ul>
                                        <li>
                                            {{ifitemdtl.name}}
                                            <ul><li>{{ifitemdtl.infor}}</li></ul>
                                        </li>
                                    </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--詳細:<br><strong>{{selfunction}}</strong>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Interface</h2>
                </div>
                <div class="panel-body">
                    <b-form-select v-model="selinterface" :options="iinterface" class="form-control" name="i_interface_id"/>
                    <div v-for="iinteritem in iinterfaceall">
                        <div v-if="iinteritem.id==selinterface">
                            <ul>
                                <li>
                                    {{iinteritem.name}}
                                    <div v-for="iinteritemdtl in iinteritem.m_i_interfaces">
                                        <ul>
                                            <li>
                                                {{iinteritemdtl.name}}
                                                <ul><li>{{iinteritemdtl.infor}}</li></ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--詳細:<br><strong>{{selfunction}}</strong>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <h2>typecode</h2>
            <b-form-input id="typecode"
                          type="text"
                          name="typecode"
                          v-model="typecode"
                          required
                          placeholder="typecode">
            </b-form-input>
        </div>
        <div class="col-sm-4">
            <h2>scale w</h2>
            <b-form-input id="scale_w"
                          type="number"
                          name="scale_w"
                          step="0.01"
                          v-model="scalew"
                          required
                          placeholder="scale w">
            </b-form-input>
        </div>
        <div class="col-sm-4">
            <h2>scale d</h2>
            <b-form-input id="scale_d"
                          type="number"
                          name="scale_d"
                          step="0.01"
                          v-model="scaled"
                          required
                          placeholder="scale d">
            </b-form-input>
        </div>
        <div class="col-sm-4">
            <h2>scale h</h2>
            <b-form-input id="scale_h"
                          type="number"
                          name="scale_h"
                          step="0.01"
                          v-model="scaleh"
                          required
                          placeholder="scale h">
            </b-form-input>
        </div>

        <div class="col-sm-4">
            <h2>weight</h2>
            <b-form-input id="weight"
                          type="number"
                          name="weight"
                          step="0.01"
                          v-model="weight"
                          required
                          placeholder="weight">
            </b-form-input>
        </div>

    </div>

</template>

<script>
    export default {
        name: "bvselect",
        props:{
            makers:{
                type: Object,
                required:true,
            },
            makerinfor:{
                type: Object,
                required:true,
            },
            icategory:{
                type: Object,
                required:true,
            },
            icategoryall:{
                type: Array,
                required:true,

            },
            ifunction:{
                type: Object,
                required:true,
            },
            ifunctionall:{
                type: Array,
                required:true,
            },
            iinterface:{
                type: Object,
                required:true,
            },
            iinterfaceall:{
                type: Array,
                required:true,
            },
        },
        data(){
            return{
                selected:null,
                selcategory:null,
                selfunction:null,
                selinterface:null,
                typecode:'',
                scalew:null,
                scaled:null,
                scaleh:null,
                weight:null,
                // options:makers,
                // options:[
                //     { value: null, text: 'Please select an option' },
                //     { value: 'a', text: 'This is First option' },
                //     { value: 'b', text: 'Selected Option' },
                //     { value: {'C': '3PO'}, text: 'This is an option with object value' },
                //     { value: 'd', text: 'This one is disabled', disabled: true }
                // ]
            }
        }
    }
</script>

<style scoped>

</style>