<template>

    <div>
        <!--<b-navbar toggleable="md" type="dark" variant="info">-->
            <!--<b-navbar-toggle target="nav_collapse"></b-navbar-toggle>-->
            <!--<b-navbar-brand href="#">NavBar</b-navbar-brand>-->
            <!--<b-collapse is-nav id="nav_collapse">-->
                <!--<b-navbar-nav>-->
                    <!--<b-nav-item href="#">Link</b-nav-item>-->
                    <!--<b-nav-item href="#" disabled>Disabled</b-nav-item>-->
                <!--</b-navbar-nav>-->
            <!--</b-collapse>-->
        <!--</b-navbar>-->

        <!--<bAlert  show >test</bAlert>-->
        <b-alert show>test</b-alert>
        <!--<b-alert>test</b-alert>-->
        <!--<b-alert variant="success">Success Alert</b-alert>-->
        test
    </div>


    <!--<div>-->
        <!--Hello vue World!!<br>-->
        <!--Name:{{data.name}}<br>-->
    <!--</div>-->
</template>

<!--<script>-->
    <!--export default {-->
        <!--name: "ExampleTest",-->
        <!--props: {-->
            <!--data: {-->
                <!--type: Object,-->
                <!--required: true,-->
            <!--}-->
        <!--}-->
    <!--}-->
<!--</script>-->

<script>
    // import bAlert from 'bootstrap-vue/es/components/alert/alert'
    import Navbar from "bootstrap-vue/es/components/navbar/navbar";
    export default {
        components: {Navbar},
        // components: {
        //     bAlert
        // },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>