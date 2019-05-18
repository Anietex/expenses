<template>
    <div>

    </div>
</template>

<script>
    import HeaderComponent from "../components/header/HeaderComponent";
    import ExpenseFormComponent from "../components/expenses/ExpenseFormComponent";
    export default {
        name: "Home",
        components: {ExpenseFormComponent, HeaderComponent}
    }
</script>

<style scoped lang="scss">
    .expense-form{
        margin-top: 30px;
    }

</style>
