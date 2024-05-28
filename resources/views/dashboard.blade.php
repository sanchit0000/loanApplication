@include('header')

    <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
  <h1>Loan Application</h1>
  <br>
    <form action="{{route('calculate-loan')}}" method="POST">
    @csrf
        <div class="formbold-input-flex">
            <div>
            <label for="name" class="formbold-form-label"> Full Name * </label>
            <input required
                type="text"
                name="name"
                id="name"
                placeholder="Your full name"
                class="formbold-form-input"
            />
            </div>

            <div>
            <label for="address" class="formbold-form-label"> Address * </label>
            <input required
                type="text"
                name="address"
                id="address"
                placeholder="Your address"
                class="formbold-form-input"
            />
            </div>
        </div>

        <div class="formbold-input-flex">
            <div>
                <label for="pan_number" class="formbold-form-label"> Pan Number * </label>
                <input required
                type="text"
                name="pan_number"
                id="pan_number"
                placeholder="Pan number"
                class="formbold-form-input"
                />
            </div>

            <div>
                <label for="company" class="formbold-form-label"> Company * </label>
                <input required
                type="text"
                name="company"
                id="company"
                placeholder="Company"
                class="formbold-form-input"
                />
            </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="current_salary" class="formbold-form-label"> Current Salary * </label>
            <input required
            type="text"
            name="current_salary"
            id="current_salary"
            placeholder="Current Salary"
            class="formbold-form-input"
            value="0"
            />
        </div>

        <div>
            <label for="previous_salary" class="formbold-form-label"> Previous Salary </label>
            <input
            type="text"
            name="previous_salary"
            id="previous_salary"
            placeholder="Previous Salary"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label class="formbold-form-label">Owns a House </label>
            <input
            type="checkbox"
            name="owns_house"
            id="owns_house"
            />
        </div>

        <div>
            <label for="rent_amount" class="formbold-form-label"> Rent Amount *</label>
            <input required
            type="number"
            name="rent_amount"
            id="rent_amount"
            placeholder="Rent Amount"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="grocery_expense" class="formbold-form-label"> Grocery Expense * </label>
            <input required
            type="number"
            name="grocery_expense"
            id="grocery_expense"
            placeholder="Grocery Expense"
            class="formbold-form-input"
            value="0"
            />
        </div>

        <div>
            <label for="current_emis" class="formbold-form-label"> Current EMIs *</label>
            <input required
            type="number"
            name="current_emis"
            id="current_emis"
            placeholder="Current EMIs"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="previous_hike" class="formbold-form-label"> Previous Hike Date </label>
            <input
            type="date"
            name="previous_hike"
            id="previous_hike"
            placeholder="Previous Hike Date"
            class="formbold-form-input"
            />
        </div>

        <div>
            <label for="next_hike" class="formbold-form-label"> Next Hike Date </label>
            <input
            type="date"
            name="next_hike"
            id="next_hike"
            placeholder="Next Hike Date"
            class="formbold-form-input"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="bank_name" class="formbold-form-label"> Bank Name *</label>
            <input required
            type="text"
            name="bank_name"
            id="bank_name"
            placeholder="Bank Name"
            class="formbold-form-input"
            />
        </div>

        <div>
            <label for="mall_visits" class="formbold-form-label"> Mall Visits per Month *</label>
            <input required
            type="number"
            name="mall_visits"
            id="mall_visits"
            placeholder="Mall Visits per Month"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="avg_mall_spending" class="formbold-form-label"> Avg Mall Spending *</label>
            <input required
            type="number"
            name="avg_mall_spending"
            id="avg_mall_spending"
            placeholder="Avg Mall Spending"
            class="formbold-form-input"
            value="0"
            />
        </div>

        <div>
            <label for="utility_expenses" class="formbold-form-label"> Utility Expenses *</label>
            <input required
            type="number"
            name="utility_expenses"
            id="utility_expenses"
            placeholder="Utility Expenses"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="transportation_expenses" class="formbold-form-label"> Transportation Expenses *</label>
            <input required
            type="number"
            name="transportation_expenses"
            id="transportation_expenses"
            placeholder="Transportation Expenses"
            class="formbold-form-input"
            value="0"
            />
        </div>

        <div>
            <label for="savings" class="formbold-form-label"> Monthly Savings *</label>
            <input required
            type="number"
            name="savings"
            id="savings"
            placeholder="Monthly Savings"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="dependents" class="formbold-form-label"> Number of Dependents *</label>
            <input required
            type="number"
            name="dependents"
            id="dependents"
            placeholder="Number of Dependents"
            class="formbold-form-input"
            value="1"
            />
        </div>

        <div>
            <label for="preferred_repayment_period" class="formbold-form-label"> Preferred Repayment Period (months) *</label>
            <input required
            type="number"
            name="preferred_repayment_period"
            id="preferred_repayment_period"
            placeholder="Preferred Repayment Period (months)"
            class="formbold-form-input"
            value="12"
            />
        </div>
        </div>

        <div class="formbold-input-flex">
        <div>
            <label for="desired_loan" class="formbold-form-label"> Desired Loan Amount *</label>
            <input required
            type="number"
            name="desired_loan"
            id="desired_loan"
            placeholder="Desired Loan Amount"
            class="formbold-form-input"
            value="0"
            />
        </div>
        </div>

      <button class="formbold-btn">Apply Now</button>
    </form>
  </div>
</div>
</body>
</html>