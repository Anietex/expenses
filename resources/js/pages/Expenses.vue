<template>
    <div class="expenses">
        <div class="container">
            <div class="list">
                <ExpensesListComponent></ExpensesListComponent>
            </div>
        </div>
    </div>
</template>

<script>
    import ExpensesListComponent from "../components/expenses/ExpensesListComponent";
    export default {
        name: "Expenses",
        components: {ExpensesListComponent}
    }
</script>

<style scoped lang="scss">
    .list{
        margin-top: 50px;
    }
</style>
