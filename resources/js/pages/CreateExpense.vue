<template>
    <div>
        <div class="expense-form">
            <div class="container">
                <div class="row">
                    <div class="col m12">
                        <ExpenseFormComponent/>
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

        data:()=>{

        },
        methods:{

            addExpense(expense){

                axios.post('')
            }
        }
    }
</script>
<style scoped>
    .expense-form{
        margin-top: 30px;
    }

</style>
