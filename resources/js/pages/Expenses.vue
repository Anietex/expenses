<template>
    <div class="expenses">
        <div class="container">
            <div class="list">
                <ExpensesListComponent :expenses="expenses"></ExpensesListComponent>
            </div>
        </div>
    </div>
</template>

<script>
    import ExpensesListComponent from "../components/expenses/ExpensesListComponent";
    export default {
        name: "Expenses",
        components: {ExpensesListComponent},
        data:()=>({
           expenses:[],
        }),
        methods:{
            fetchExpenses(){
                this.$http.get('/expenses')
                    .then(({data})=>{
                        console.log(data.data)
                        this.expenses = data.data;
                    })
            }
        },

        created() {
            this.fetchExpenses();
        }
    }
</script>

<style scoped lang="scss">
    .list{
        margin-top: 50px;
    }
</style>
