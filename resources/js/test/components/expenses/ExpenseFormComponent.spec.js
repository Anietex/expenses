import { mount } from '@vue/test-utils';
import expect from 'expect';
import expenses from '../../fixtures/expenses'

import ExpenseFormComponent from '../../../components/expenses/ExpenseFormComponent';

describe("ExpenseFormComponent.vue",() => {
    const wrapper = mount(ExpenseFormComponent);

    wrapper.setData({
        expense:expenses[0]
    });

    it("should have the right state",function () {
        expect(wrapper.vm.expense).toEqual(expenses[0])
    })

    it('should emit formSubmitted when add expense button is clicked',() => {
        wrapper.find('form').trigger('submit');
        expect(wrapper.emitted().formSubmitted[0][0]).toStrictEqual(expenses[0])
    })

})
