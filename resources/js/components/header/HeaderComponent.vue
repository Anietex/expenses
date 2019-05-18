<template>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Expenses</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <router-link :to="{name:'create-expense'}">Create Expense</router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'list-expenses'}">List Expense</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "HeaderComponent"
    }
</script>

<style scoped>

</style>
