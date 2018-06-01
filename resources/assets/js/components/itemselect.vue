<template>
    <div class="card">
        <div class="card-header">
            <h5>Item</h5>
        </div>

        <!--Tableに仕様変更-->
        <div class="card-body">
            <!--json&ndash;&gt;{{getitems}}-->
            <div class="row">
                <div class="col-sm-6">
                    <nav aria-label="Items">
                        <ul class="pagination">
                        <li :class="{'page-item':1,disabled: current_page <= 1}"><a href="#" :class="{'page-link':1}" @click="change(1)">&laquo;</a></li>
                        <li :class="{'page-item':1,disabled: current_page <= 1}"><a href="#" :class="{'page-link':1}"
                                                                      @click="change(current_page - 1)">&lt;</a></li>
                        <li v-for="page in pages" :key="page" :class="{active: page === current_page}">
                        <a href="#" :class="{'page-link':1}" @click="change(page)">{{page}}</a>
                        </li>
                        <li :class="{'page-item':1,disabled: current_page >= last_page}"><a href="#" :class="{'page-link':1}"
                                                                              @click="change(current_page + 1)">&gt;</a>
                        </li>
                        <li :class="{'page-item':1,disabled: current_page >= last_page}"><a href="#" :class="{'page-link':1}" @click="change(last_page)">&raquo;</a>
                        </li>
                    </ul>
                    </nav>
                    <div style="" class="col-sm-8 text-left">全 {{total}} 件中 {{from}} 〜 {{to}} 件表示</div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <table v-if="getitems !== null" class="table table-responsive table-striped table-bordered">
                <thead>
                <tr>
                    <th>name</th>
                    <th>id</th>
                    <th>supply</th>
                    <th>shops</th>
                    <th>Quality</th>
                    <th>Stocks</th>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="itemd in getitems.data.data" >
                    <td>{{itemd.name}}</td>
                    <td>{{itemd.infor}}</td>
                    <td>
                        <ul>
                            <li v-for="supply in itemd.i_supplies">{{supply.name}}
                                <ul>
                                    <li v-for="msupply in supply.m_supplies">{{msupply.name}}</li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li v-for="mshop in itemd.m_shops">
                                {{mshop.name}}
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li v-for="qlvl in itemd.i_quality_lvls">{{qlvl.name}}
                                <ul>
                                    <li v-for="miqc in itemd.m_i_qlty_categories">{{miqc.name}}:{{miqc.score}}</li>
                                </ul>

                            </li>
                        </ul>
                    </td>
                    <td>
                        <span>{{stckCount(itemd.stocks)}}</span>
                        <!--<span v-for="stkitem in itemd.stocks">{{stckCount(stkitem)}}</span>-->
                    </td>
                    <td>
                        <a v-bind:href="'/items/'+itemd.id+'/edit'" title="Edit" class="btn btn-primary btn-sm">編集{{itemd.id}}</a>
                        <button v-on:click="deleteItem(itemd.id)" class="btn btn-danger  btn-sm"" >削除</button>
                        <a v-bind:href="'/stocks/'+itemd.id+'/add'" title="Edit" class="btn btn-primary btn-sm">在庫追加{{itemd.id}}</a>
                        <!--<a href="/items/create" title="Stock" class="btn btn-primary btn-sm">追加</a>-->
                    </td>
                    <!--<td>{{item.i_supplies[0].name}}</td>-->
                    <!--<td>{{item.m_shops[0].name}}</td>-->
                    <!--<td>{{item.i_supplies[0].name}}</td>-->
                </tr>

                </tbody>
            </table>
                </div>
            </div>
            <!--<b-table striped hover :getitems="getitems.data"></b-table>-->

        </div>
        <!--Tableに仕様変更-->

    </div>

</template>

<script>
    export default {
        name: "itemselect",
        props: {
            itemsall: {
                type: Array,
                required: true,
            },
            items: {
                type: Object,
                required: true,
            },
        },
        data() {
            return {
                selitems: null,
                getitems: null,
                current_page: 1,
                last_page: 1,
                total: 0,
                from: 0,
                to: 0,
                per_page: 1,
                stocknum:0,
                getstock:null,
            }
        },
        // mounted(){
        //     this.load(1);
        // },
        created: function () {
            eventHub.$on('setitem', this.setitem);

        },
        methods: {
            load(page) {
                console.log("Load--called");
                axios
                    .get('/api/relmitemsitemPages/' + this.mitemid + '?page=' + page)
                    .then(response => {
                        this.getitems = response;
                        this.current_page = response.data.current_page;
                        this.last_page = response.data.last_page;
                        this.total = response.data.total;
                        this.from = response.data.from;
                        this.to = response.data.to;
                        this.per_page =response.data.per_page;
                    })
                    .catch(error => console.log(error));
            },

            change(page) {
                if (page >= 1 && page <= this.last_page) this.load(page)
            },

            setitem: function (val) {
                axios
                    .get('/api/relmitemsitemPages/' + val.selectedid + '?page=' + 1)
                    .then(response => {
                        this.getitems = response;
                        this.current_page = response.data.current_page;
                        this.last_page = response.data.last_page;
                        this.total = response.data.total;
                        this.from = response.data.from;
                        this.to = response.data.to;
                        this.per_page =response.data.per_page;
                    })
                    .catch(error => console.log(error));
                this.mitemid = val.selectedid;

                console.log(this.total);
                console.log("setitem--called");

                // axios
                //     .get('/api/relmitemsitemPages/'+val.selectedid)
                //     .then(response => (this.getitems = response)).catch(error => console.log(error));

                console.log("--called");
            },

            deleteItem: function (id) {
                console.log(id);
                axios
                    .delete('/items/' + id)
                    .then(response => {
                        window.location.reload();
                        // this.getitems = response;
                        // this.current_page = response.data.current_page;
                        // this.last_page = response.data.last_page;
                        // this.total = response.data.total;
                        // this.from = response.data.from;
                        // this.to = response.data.to;
                        // this.per_page =response.data.per_page;
                    })
                    .catch(error => console.log(error));

            },

            stckCount(stkitem)
            {
                var ret = 0;
                stkitem.forEach(function (value) {
                    if(value.selflg==0)
                       ret++;
                });
                return ret;
            },


             async  stockconut(id){
                 var temp = new Object();
                 await  axios
                    .get('/api/stockCounter/' + id)
                    .then(response => {
                        this.getstock= response;
                    })
                    .catch(error => console.log(error));



                 console.log("--Objective_"+this.getstock.data);
                  return this.getstock;

            },


        },
        computed: {
            pages() {
                let start = _.max([this.current_page - 2, 1]);
                let end = _.min([start + 5, this.last_page + 1]);
                start = _.max([end - 5, 1]);
                return _.range(start, end);
            },

        },
    }
</script>

<style scoped>

</style>