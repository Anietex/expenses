<template>
    <div>
        <div class="expense-form">
            <div class="container">
                <div class="row">
                    <div class="col m12">
                        <ExpenseFormComponent @formSubmitted="addExpense($event)"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import ExpenseFormComponent from "../components/expenses/ExpenseFormComponent";


    export default {
        components: {ExpenseFormComponent},

        data:()=>({

        }),
        methods:{
            addExpense(expense){
                console.log(expense);
                this.$http.post('/expenses',expense)
                    .then(({data})=>{
                        this.$toastr.success("Expense saved successfully")
                    })
            }
        }
    }
</script>
<style scoped>
    .expense-form{
        margin-top: 30px;
    }

</style>
