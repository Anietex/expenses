<template>
    <div class="expense-form">
        <div class="card">
            <div class="form card-content">
                <span class="card-title">{{title}}</span>
              <form @submit.prevent="submitForm" >
                  <div class="row">
                      <div class="col l4 input-field">
                          <input v-model="expense.date" type="text"  id="date" class="datepicker validate" required>
                          <label for="date">Date</label>
                          <span class="helper-text" data-error="Select expense date" ></span>
                      </div>
                      <div class="input-field col l4">
                          <input  v-model="expense.value" id="Value" type="text" class="validate" pattern="^\d+(\.\d+)?(EUR)?$" required>
                          <label for="value">Value</label>
                          <span class="helper-text" data-error="Enter a valid expense amount" ></span>
                      </div>
                      <div class="input-field col l4">
                          <input v-model="expense.reason" id="reason" type="text" class="validate" required>
                          <label for="reason">Reason for Expense</label>
                          <span class="helper-text" data-error="Enter reason for expense" ></span>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s3">
                          <h6>+20% VAT ({{vat}}) {{vat+parseFloat(expense.value || 0)}}</h6>
                      </div>
                      <div class="col s3 offset-s6">
                          <button class="btn waves-effect waves-light" type="submit" name="action">Save Expense
                              <i class="material-icons right">send</i>
                          </button>
                      </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ExpenseFormComponent",
        data:()=>({
            expense:{
                date:'',
                value:'',
                reason:''
            }
        }),
        computed:{
          vat(){
              if(!isNaN(this.expense.value)){
                  return this.expense.value*.20;
              }
              return  0;
          }
        },
        methods:{
            submitForm(){
                this.$emit('formSubmitted',this.expense)
            },
            clearFields(){
                Object.keys(this.expense).forEach((key)=>{
                    this.expense[key] = ''
                })
                M.updateTextFields();
            }
        },
        props:['title'],
        mounted() {
            const vm = this;
            let elems = document.querySelectorAll('.datepicker',);
             M.Datepicker.init(elems,{
                 format:'yyyy-mm-dd',
                 //Due how materialCss is datepicker is implemented date do not get set
                 //to vue data so i do it manually
                 onClose(){
                     vm.expense.date = this.toString()
                 }
             });
        }
    }
</script>

<style scoped>

</style>
