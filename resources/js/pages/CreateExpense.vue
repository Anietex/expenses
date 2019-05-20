<template>
    <div>
        <div class="expense-form">
            <div class="container">
                <div class="row">
                    <div class="col m12">
                        <ExpenseFormComponent ref="createExpense" @formSubmitted="addExpense($event)"/>
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
        methods:{
            addExpense(expense){
                this.$http.post('/expenses',expense)
                    .then(({data})=>{
                        this.$toastr.success("Expense saved successfully");
                        this.$refs.createExpense.clearFields()
                    })
                    .catch((err)=>{
                        console.log(err)
                        this.$toastr.error("Oops there was an error saving your expenses")
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
