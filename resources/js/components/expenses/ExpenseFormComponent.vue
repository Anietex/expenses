<template>
    <div class="expense-form">
        <div class="card">
            <div class="form card-content">
                <span class="card-title">{{title}}</span>
              <form>
                  <div class="row">
                      <div class="col l4 input-field">
                          <input type="text"  id="date" class="datepicker">
                          <label for="date">Date</label>
                      </div>
                      <div class="input-field col l4">
                          <input  id="Value" type="text" class="validate">
                          <label for="value">Value</label>
                          <span class="helper-text">VAT: {{6}}</span>
                      </div>
                      <div class="input-field col l4">
                          <input id="reason" type="text" class="validate">
                          <label for="reason">Reason for Expense</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s2 offset-s10">
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
        props:['title'],
        mounted() {
            let elems = document.querySelectorAll('.datepicker');
             M.Datepicker.init(elems);
        }
    }
</script>

<style scoped>

</style>
