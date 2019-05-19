import { mount } from '@vue/test-utils';
import expect from 'expect';
import expenses from '../../fixtures/expenses'

import ExpensesListComponent from '../../../components/expenses/ExpensesListComponent';


describe("ExpensesListComponent.vue",()=>{
    const wrapper = mount(ExpensesListComponent);
    wrapper.setProps({
        expenses,
    });


    it('should have the right props', function () {
       expect( wrapper.props().expenses).toEqual(expenses)
    });

    it("should calculate 20% vat",function () {
        expect(wrapper.vm.calculateVat(150)).toBe(180)
    })



});
