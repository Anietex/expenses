import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "./pages/Home";
import CreateExpense from "./pages/CreateExpense";
Vue.use(VueRouter);

const routes =[

    {
        path:'/',
        name:'home',
        component:Home
    },
    {
        path:'/expenses/create',
        name:'create-expense',
        component:CreateExpense
    }
];


const router = new VueRouter({
    routes
})


export  default router
