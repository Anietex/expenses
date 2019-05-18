<template>
    <div>
       <HeaderComponent/>
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
