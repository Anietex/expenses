<template>
    <div>
        <HeaderComponent/>
        <router-view></router-view>
    </div>
</template>
<script>
    import HeaderComponent from "../components/header/HeaderComponent";

    export default {
        name: "App",
        components:{
            HeaderComponent
        }
    }
</script>

<style scoped>

</style>
