<template>
    <div class="expenses-table">
        <table>
            <thead>
            <tr>
                <th>S/N</th>
                <th>Date</th>
                <th>Value (+VAT)</th>
                <th>Reason</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="(expense,index) in expenses" :key="index">
                    <td>{{index+1}}</td>
                    <td>{{expense.expense_date}}</td>
                    <td>{{calculateVat(expense.value)}}</td>
                    <td>{{expense.reason}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "ExpensesListComponent",
        props:['expenses'],
        methods:{
            calculateVat(amount){
                return amount+amount*.20
            }
        }
    }
</script>

<style scoped>

</style>
