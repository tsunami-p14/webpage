<template>
    <div>
    <b-navbar toggleable="md" type="dark" variant="info">

        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <b-navbar-brand href="#">doters</b-navbar-brand>

        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav>

                <b-nav-item-dropdown text="Masters">
                    <b-dropdown-item href="/makers">Makers</b-dropdown-item>
                    <b-dropdown-item href="/micategories">カテゴリマスタ</b-dropdown-item>
                    <b-dropdown-item href="/micategorydtls">カテゴリ詳細</b-dropdown-item>
                    <b-dropdown-item href="/icategories">カテゴリ</b-dropdown-item>
                    <b-dropdown-item href="/mifunctiondtls">機能詳細</b-dropdown-item>
                    <b-dropdown-item href="/ifunctions">商品機能グループ</b-dropdown-item>
                    <b-dropdown-item href="/miinterface">インタフェイスマスタ</b-dropdown-item>
                    <b-dropdown-item href="/iinterface">インタフェイス</b-dropdown-item>
                    <b-dropdown-item href="/msupplies">サプライマスタ</b-dropdown-item>
                    <b-dropdown-item href="/isupplies">サプライ</b-dropdown-item>
                    <b-dropdown-item href="/miqualitycategories">クオリティマスタ</b-dropdown-item>
                    <b-dropdown-item href="/iqualitylvls">クオリティグループ</b-dropdown-item>
                    <b-dropdown-item href="/mshops">ショップマスタ</b-dropdown-item>
                    <b-dropdown-item href="/shelves">棚マスタ</b-dropdown-item>
                    <b-dropdown-item href="/locations">位置マスタ</b-dropdown-item>

                </b-nav-item-dropdown>

                <b-nav-item-dropdown text="Relation">
                    <b-dropdown-item href="/micrelmicdtl">カテゴリマスタとその詳細</b-dropdown-item>
                    <b-dropdown-item href="/icrelmic">アイテムカテゴリとそのマスタ</b-dropdown-item>
                    <b-dropdown-item href="/ifunrelmifunc">ファンクションとその詳細</b-dropdown-item>
                    <b-dropdown-item href="/reliinterfacemiinterface">インタフェイスとそのマスタ</b-dropdown-item>
                    <b-dropdown-item href="/mitems">アイテムマスタ</b-dropdown-item>
                    <b-dropdown-item href="/relisupplymsupply">サプライ群</b-dropdown-item>
                    <b-dropdown-item href="/reliqualitylvlmiqltycategories">クオリティ群</b-dropdown-item>
                    <b-dropdown-item href="/rellocationshelves">棚と位置</b-dropdown-item>
                </b-nav-item-dropdown>

                <b-nav-item-dropdown text="Items">
                    <b-dropdown-item href="/items">Items</b-dropdown-item>
                </b-nav-item-dropdown>

                <b-nav-item-dropdown text="Lists">
                    <b-dropdown-item href="/stocklists">Stock Lists</b-dropdown-item>
                </b-nav-item-dropdown>


            </b-navbar-nav>


            <b-navbar-nav>
                <b-nav-item href="#">Link</b-nav-item>
                <b-nav-item href="#" disabled>Disabled</b-nav-item>
            </b-navbar-nav>

            <!-- Right aligned nav items -->
            <b-navbar-nav class="ml-auto">

                <b-nav-form method="get" action="/stocklists" >
                    <b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Search" name="keywords" />
                    <b-button size="sm" class="my-2 my-sm-0" type="submit">Search!</b-button>
                </b-nav-form>

                <b-nav-item-dropdown text="Lang" right>
                    <b-dropdown-item href="#">EN</b-dropdown-item>
                    <b-dropdown-item href="#">ES</b-dropdown-item>
                    <b-dropdown-item href="#">RU</b-dropdown-item>
                    <b-dropdown-item href="#">FA</b-dropdown-item>
                </b-nav-item-dropdown>

                <b-nav-item-dropdown right>
                    <!-- Using button-content slot -->
                    <template slot="button-content">
                        <em>User</em>
                    </template>
                    <b-dropdown-item href="#">Profile</b-dropdown-item>
                    <b-dropdown-item href="#">Signout</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-navbar-nav>

        </b-collapse>
    </b-navbar>
    </div>
</template>
<script>
    export default {
        name: "VueNavbar"
    }
</script>

<style scoped>

</style>