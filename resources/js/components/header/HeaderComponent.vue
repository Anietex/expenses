<template>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Expenses</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <router-link :to="{name:'create-expense'}">Expenses</router-link>
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
